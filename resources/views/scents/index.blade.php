@extends('layout')

@section('title', 'Scents')

@section('main')

  @if (Auth::check())
  <a href="/scents/create">Add a scent</a>
  <table class="table">
    <tr>
      <th>Scent</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @forelse($scents as $scent)
    <tr>
      <td>
        {{$scent->Scent}}
      </td>
      <td>
        <a href="/scents/{{$scent->ScentId}}/edit">Edit</a>
      </td>
      <td>
        <a href="scents/{{$scent->ScentId}}/destroy">Delete</a>
      </td>
    @empty
      <tr>
        <td colspan="4">No scents found</td>
      </tr>
    @endforelse
  </table>
  @else
    <table class="table">
      <tr>
        <th>Scent</th>
      </tr>
      @forelse($scents as $scent)
      <tr>
        <td>
          {{$scent->Scent}}
        </td>
      @empty
        <tr>
          <td colspan="4">No scents found</td>
        </tr>
      @endforelse
    </table>`

  @endif
@endsection
