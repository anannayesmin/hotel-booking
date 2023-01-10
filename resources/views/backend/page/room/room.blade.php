@extends('backend.master')

@section('contains')
<div class="container">

<h1 class="text-center">Room</h1>
</div>

<a class="btn btn-primary"href="{{route('room.create.form')}}">Create</a><br><br>

<div class="container">

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Hotel Id</th>
      <th scope="col">Room Type</th>
      <th scope="col">Number</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($room as $Room)
    <tr>
      <th scope="row">{{$Room->id}}</th>
      <td><img width="70px" src="{{ url('/uploads/rooms/',$Room->room_image) }}" alt="" srcset=""></td>
      <td>{{$Room->hotel->hotel_name}}</td>
      <td>{{$Room->roomType->room_type}}</td>
      <td>{{$Room->room_number}}</td>
      
      <td><a class="btn btn btn-danger"href="{{route('delete.room',$Room->id)}}">Delete</a>
      <a class="btn btn btn-success"href="{{route('edit.room',$Room->id)}}">Edit</a>
    </td>
      
    </tr>
 @endforeach
  </tbody>
</table>
</div>
@endsection