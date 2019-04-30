@extends('layout')

@section('title', 'Add a Scent')

@section('main')
  <div class="row">
    <div class="col">
      <form action="/scents" method="post">
        @csrf
        <div class="form-group">
          <label for="scent">Scent</label>
          <input type="text" id="scent" name="scent" class="form-control" value="{{old('scent')}}">
          <small class="text-danger">{{$errors->first('scent')}}</small><br />
        </div>
        <button type="submit" class="btn btn-primary">
          Save
        </button>
      </form>
    </div>
  </div>

@endsection
