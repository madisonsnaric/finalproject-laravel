<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class StateFlowersController extends Controller
{
    // public function index(Request $request)
    // {
    //   $query = DB::table('stateflowers')
    //     ->join('flowers', 'stateflowers.FlowerId', '=', 'flowers.FlowerId')
    //     ->orderBy('StateName', 'ASC');
    //
    //   if ($request->query('search')) {
    //     $query->where('StateName', 'LIKE', '%' . $request->query('search') . '%');
    //     $query->orWhere('flowers.Name', '%' .  'LIKE', $request->query('search') . '%');
    //   }
    //
    //   $stateflowers = $query ->get();
    //
    //   return view('stateflowers.index', [
    //     'stateflowers' => $stateflowers,
    //     'search' => $request->query('search')
    //   ]);
    // }

    public function index()
    {
      $stateflowers = DB::table('stateflowers')
        ->join('flowers', 'stateflowers.FlowerId', '=', 'flowers.FlowerId')
        ->orderBy('StateName', 'ASC')
        ->get();

      return view('stateflowers.index', [
        'stateflowers' => $stateflowers,
      ]);
    }

    public function show($FlowerId = null)
    {
      if($FlowerId) {
        $flowers = DB::table('flowers')
        ->join('bloomingperiods', 'flowers.BloomingPeriodId', '=', 'bloomingperiods.BloomingPeriodId')
        ->join('scents', 'flowers.ScentId', '=', 'scents.ScentId')
        ->where('FlowerId', '=', $FlowerId)
        ->orderBy('Name', 'ASC') // ???
        ->get();
      } else {
        $flowers = [];
      }

      return view('flowers.plantcare', [
        'flowers' => $flowers
      ]);
    }

}
