<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App;

class BloomingPeriodsController extends Controller
{
    public function index()
    {
      $bloomingperiods = DB::table('bloomingperiods')
        ->get();

      return view('bloomingperiods.index', [
        'bloomingperiods' => $bloomingperiods,
      ]);
    }

    public function create()
    {
      return view('bloomingperiods.create');
    }

    public function store(Request $request)
    {
      // validate namespace
      $input = $request->all();
      $validation = Validator::make($input, [
        'bloomingperiod' => 'required|min:3|unique:bloomingperiods,Bloomingperiod',
      ]);

      // if validation fails, redirect back to form with errors
      if ($validation->fails()) {
        return redirect('/bloomingperiods/create')
          ->withInput()
          ->withErrors($validation);
      }

      // otherwise insert the scent into the DB
      DB::table('bloomingperiods')->insert([
        'Bloomingperiod' => $request->bloomingperiod
      ]);

      // redirect back to /scents
      return redirect('bloomingperiods');
    }

    public function edit($id)
    {
        $bloomingperiod = DB::table('bloomingperiods')
        ->where('BloomingPeriodId', '=', $id)
        ->first();

      return view('bloomingperiods.edit', [
        'bloomingperiod' => $bloomingperiod
      ]);
    }

    public function update($id, Request $request)
    {
      $bloomingperiod = App\BloomingPeriod::find($id);
      $bloomingperiod->bloomingperiod = $request->input('bloomingperiod');
      $bloomingperiod->save();
      return redirect('bloomingperiods');
    }

    public function destroy($BloomingPeriodId)
    {
      $bloomingperiod = App\BloomingPeriod::find($BloomingPeriodId);
      $bloomingperiod->delete();
      return redirect('bloomingperiods');
    }

}
