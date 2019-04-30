<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App;

class ScentsController extends Controller
{
    public function index()
    {
      $scents = DB::table('scents')
        ->orderBy('Name', 'ASC')
        ->get();

      return view('scents.index', [
        'scents' => $scents,
      ]);
    }

    public function create()
    {
      return view('scents.create');
    }

    public function store(Request $request)
    {
      // validate namespace
      $input = $request->all();
      $validation = Validator::make($input, [
        'scent' => 'required|min:3|unique:scents,Scent',
      ]);

      // if validation fails, redirect back to form with errors
      if ($validation->fails()) {
        return redirect('/scents/create')
          ->withInput()
          ->withErrors($validation);
      }

      // otherwise insert the scent into the DB
      DB::table('scents')->insert([
        'Scent' => $request->scent
      ]);

      // redirect back to /scents
      return redirect('scents');
    }

    public function edit($id)
    {
        $scent = DB::table('scents')
        ->where('ScentId', '=', $id)
        ->first();

      return view('scents.edit', [
        'scent' => $scent
      ]);
    }

    public function update($id, Request $request)
    {
      $scent = App\Scent::find($id);
      $scent->scent = $request->input('scent');
      $scent->save();
      return redirect('scents');
    }

    public function destroy($ScentId)
    {
      $scent = App\Scent::find($ScentId);
      $scent->delete();
      return redirect('scents');
    }
}
