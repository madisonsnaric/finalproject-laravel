@extends('layout')

@section('title', 'Edit a Blooming Period')

@section('main')

  <div class="row">
    <div class="col">
      <form action="/bloomingperiods/{{$bloomingperiod->BloomingPeriodId}}" method="post">
        @csrf
        <div class="form-group">
          <label for="scent">Scent</label>
          <input type="text" id="bloomingperiod" name="bloomingperiod" class="form-control" value="{{$bloomingperiod->BloomingPeriod}}">
          <small class="text-danger">{{$errors->first('bloomingperiod')}}</small><br />
        <button type="submit" class="btn btn-primary">
          Save
        </button>
      </form>
    </div>
  </div>

@endsection
