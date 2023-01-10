@extends('backend.master')
@section('contains')

<div class="container">
<h2 class="text-center">Guest List</h2>
</div>

<a class="btn btn-primary"href="{{route('guest.create.form')}}">Create</a><br><br>

<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col"> Id</th>
     
      <th scope="col"> Name</th>
      <th scope="col"> Image</th>
      <th scope="col"> Phone Number</th>
      <th scope="col"> Email</th>
      <th scope="col"> Username</th>
      <th scope="col"> Password</th>
      <th scope="col"> Address</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($guest as $Guest)
    
    <tr>
      <th scope="row">{{$Guest->id}}</th>
     
      <td>{{$Guest->guest_name}}</td>
      <td><img width="70px" src="{{ url('/uploads/guest/',$Guest->guest_image) }}" alt="" srcset=""></td>
      <td>{{$Guest->guest_phone_number}}</td>
      <td>{{$Guest->guest_email}}</td>
      <td>{{$Guest->guest_username}}</td>
      <td>{{$Guest->guest_password}}</td>
      <td>{{$Guest->guest_address}}</td>
      <td><a class="btn btn-danger"href="{{route('delete.guest',$Guest->id)}}">Delete</a></td>
      <td><a class="btn btn-success"href="{{route('edit.guest',$Guest->id)}}">Edit</a></td>
    </tr>
   @endforeach
  </tbody>
</table>

</div>
@endsection