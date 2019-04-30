@extends('layout')

@section('title', 'Flowers')

@section('main')

  <table class="table">
    <tr>
      <th>Flower</th>
      <th>Planting</th>
      <th>Care</th>
    </tr>
    @forelse($flowers as $flower)
    <tr>
      <td>
        <a href="/flowers/{{$flower->FlowerId}}">
        {{$flower->Name}}
      </a>
      </td>
      <td>
        {{$flower->Planting}}
      </td>
      <td>
        {{$flower->Care}}
      </td>
    </tr>
    @empty
      <tr>
        <td colspan="4">No flowers found</td>
      </tr>
    @endforelse
  </table>
@endsection
