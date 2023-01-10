@extends('backend.master')

@section('contains')

@if(session()->has('message'))
<P class="alert alert-message">
  {{session()->get('message')}}
</P>
@endif
<form action="{{route('room.submit')}}" method="POST" enctype="multipart/form-data">

  @csrf

  <div class="form-group">
    <label for="" class="form-label">Room Image</label><br>
    <input type="file" name="room_image" class="form-control" id=""><br><br>
  </div>

  <div class="form-group mb-3">
    <select name="room_hotel_id" class="form-control">
      @foreach($hotels as $hotel )
      <option value="{{$hotel->id}}">{{$hotel->hotel_name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group mb-3">
    <select name="room_type_id" class="form-control">
      @foreach($roomType as $data )
      <option value="{{$data->id}}">{{$data->room_type}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group mb-3">

    <input type="text" name="room_number" class="form-control" id="room_number" placeholder="Room Number *" required>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection