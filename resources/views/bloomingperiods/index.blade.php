@extends('layout')

@section('title', 'Blooming Periods')

@section('main')

  @if (Auth::check())
  <a href="/bloomingperiods/create">Add a blooming period</a>
  <table class="table">
    <tr>
      <th>Blooming Period</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @forelse($bloomingperiods as $bloomingperiod)
    <tr>
      <td>
        {{$bloomingperiod->BloomingPeriod}}
      </td>
      <td>
        <a href="/bloomingperiods/{{$bloomingperiod->BloomingPeriodId}}/edit">Edit</a>
      </td>
      <td>
        <a href="bloomingperiods/{{$bloomingperiod->BloomingPeriodId}}/destroy">Delete</a>
      </td>
    @empty
      <tr>
        <td colspan="4">No blooming periods found</td>
      </tr>
    @endforelse
  </table>
  @else
  <table class="table">
    <tr>
      <th>Blooming Period</th>
    </tr>
    @forelse($bloomingperiods as $bloomingperiod)
    <tr>
      <td>
        {{$bloomingperiod->BloomingPeriod}}
      </td>
    @empty
      <tr>
        <td colspan="4">No blooming periods found</td>
      </tr>
    @endforelse
  </table>`

@endif
@endsection
