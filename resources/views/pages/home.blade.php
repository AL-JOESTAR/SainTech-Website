@extends('layouts.app')

@section('konten')
  <div class="name">
    <p>{{$data->name}}</p>
    <p>{{$data->description}}</p>
    <p>{{$data->address}}</p>
    <p>{{$data->phone}}</p>
  </div>

  @endsection