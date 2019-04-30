<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class FlowersController extends Controller
{
    public function index(Request $request)
    {
      $query = DB::table('flowers')
        ->join('bloomingperiods', 'flowers.BloomingPeriodId', '=', 'bloomingperiods.BloomingPeriodId')
        ->join('scents', 'flowers.ScentId', '=', 'scents.ScentId')
        ->orderBy('Name', 'ASC');

        if ($request->query('search')) {
          $query->where('Name', 'LIKE', '%' . $request->query('search') . '%');
          $query->orWhere('BloomgPeriod', 'LIKE', '%' . $request->query('search') . '%');
          $query->orWhere('Scent', 'LIKE', '%' .  $request->query('search') . '%');
          $query->orWhere('ScientificName', '%' .  'LIKE', $request->query('search') . '%');
        }

        $flowers = $query->get();

      return view('flowers.flowers', [
        'flowers' => $flowers,
        'search' => $request->query('search')
      ]);
    }

    public function show($FlowerId = null)
    {
      if($FlowerId) {
        $flowers = DB::table('flowers')
        ->join('bloomingperiods', 'flowers.BloomingPeriodId', '=', 'bloomingperiods.BloomingPeriodId')
        ->join('scents', 'flowers.ScentId', '=', 'scents.ScentId')
        ->where('FlowerId', '=', $FlowerId)
        ->get();
      } else {
        $flowers = [];
      }

      return view('flowers.plantcare', [
        'flowers' => $flowers
      ]);
    }
}
