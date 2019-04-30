@extends('layout')

@section('title', 'Blooming Periods')


@section('main')

  <table class="table">
    <tr>
      <th>Blooming Period</th>
    </tr>
    @forelse($bloomingperiods as $bloomingperiod)
    <tr>
      <td>
        {{$bloomingperiod->BloomingPeriod}}
      </a>
      </td>
    @empty
      <tr>
        <td colspan="4">No blooming periods found</td>
      </tr>
    @endforelse
  </table>
@endsection
