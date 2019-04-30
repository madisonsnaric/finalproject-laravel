@extends('layout')

@section('title', 'Add a Blooming Period')

@section('main')
  <div class="row">
    <div class="col">
      <form action="/bloomingperiods" method="post">
        @csrf
        <div class="form-group">
          <label for="scent">Blooming Period</label>
          <input type="text" id="bloomingperiod" name="bloomingperiod" class="form-control" value="{{old('bloomingperiod')}}">
          <small class="text-danger">{{$errors->first('bloomingperiod')}}</small><br />
        </div>
        <button type="submit" class="btn btn-primary">
          Save
        </button>
      </form>
    </div>
  </div>

@endsection
