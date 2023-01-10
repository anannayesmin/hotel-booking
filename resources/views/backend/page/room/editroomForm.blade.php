@extends('backend.master')

@section('contains')

@if(session()->has('message'))
<p class="alert alert-success">
{{session()->get('message')}}
</p>
@endif

<form action="{{route('update.room.form',$room->id)}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf

  <div class="form-group" mb-3>
  <label for="" class="form-label">Room Image</label>
    <input type="file" name="room_image" class="form-control" id=""value="{{ url('/uploads/rooms/',$room->room_image) }}">
  </div>

  <div class="form-group mb-3">
    
    <input type="string" name="room_hotel_id" class="form-control" id="room_hotel_id" placeholder="Room Hotel Id" value="{{$room->room_hotel_id}}">
  </div>
    

  <div class="form-group mb-3">
    
    <input type="string" name="room_name" class="form-control" id="room_name" placeholder="Room Name"value="{{$room->room_name}}">
    
  </div>

    <div class="form-group mb-3">
   
    <input type="string" name="room_number" class="form-control" id="room_number" placeholder="Room Number"value="{{$room->room_number}}">
    </div>

    <div class="form-group mb-3">
    <input type="string" name="room_phone_number" class="form-control" id="room_phone_number" placeholder="Room Phone Number"value="{{$room->room_phone_number}}">
  
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection