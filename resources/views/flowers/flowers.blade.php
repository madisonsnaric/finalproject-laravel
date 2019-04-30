@extends('layout')

@section('title', 'Flowers')

@section('main')
  <form action="/flowers/" method="get">
    <input type="text" name="search" value="{{$search}}">
    <button type="submit">Search</button>
    <a href="/flowers" class="link">Clear</a>
  </form>
  <table class="table">
    <tr>
      <th>Flower</th>
      <th>Scientific Name</th>
      <th>Blooming Period</th>
      <th>Scent</th>
    </tr>
    @forelse($flowers as $flower)
    <tr>
      <td>
        <a href="/flowers/{{$flower->FlowerId}}">
        {{$flower->Name}}
        </a>
      </td>
      <td>
        {{$flower->ScientificName}}
      </td>
      <td>
        {{$flower->BloomingPeriod}}
      </td>
      <td>
        {{$flower->Scent}}
      </td>
    </tr>
    @empty
      <tr>
        <td colspan="4">No flowers found</td>
      </tr>
    @endforelse
  </table>
@endsection
