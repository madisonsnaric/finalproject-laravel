@extends('layout')

@section('title', 'Edit a Scent')

@section('main')

  <div class="row">
    <div class="col">
      <form action="/scents/{{$scent->ScentId}}" method="post">
        @csrf
        <div class="form-group">
          <label for="scent">Scent</label>
          <input type="text" id="scent" name="scent" class="form-control" value="{{$scent->Scent}}">
          <small class="text-danger">{{$errors->first('scent')}}</small><br />
        <button type="submit" class="btn btn-primary">
          Save
        </button>
      </form>
    </div>
  </div>

@endsection
