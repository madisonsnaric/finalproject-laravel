@extends('layout')

@section('title', 'State Flowers')

@section('main')


<table class="table">
  <tr>
    <th>State</th>
    <th>Flower</th>
  </tr>
  @forelse($stateflowers as $stateflower)
    <tr>
      <td>
        {{$stateflower->StateName}}
      </td>
      <td>
        <a href="/flowers/{{$stateflower->FlowerId}}">
        {{$stateflower->Name}}
      </td>
    </tr>
  @empty
    <tr>
      <td colspan="4">No state flowers found</td>
    </tr>
  @endforelse
</table>
@endsection
