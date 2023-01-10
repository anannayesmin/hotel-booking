@extends('backend.master')

@section('contains')

<div class="container">
<h1 class="text-center">Room Type</h1>

</div>

<a class="btn btn-primary" href="{{route('roomtypeform')}}"> Create</a>

<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Room Type</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($roomtype as $RoomType)
    <tr>
      <th scope="row">{{$RoomType->id}}</th>
      <td><img width="70px" src="{{ url('/uploads/roomtype/',$RoomType->image) }}" alt="" srcset=""></td>
      <td>{{$RoomType->room_type}}</td>
      <td><a class="btn btn-danger" href="{{route('delete',$RoomType->id)}}">Delete</a>
      <a class="btn btn-primary" href="{{route('edit',$RoomType->id)}}">Edit</a>
    </td>
    </tr>
  @endforeach
      
  </tbody>
</table>
</div>


@endsection