

@extends('backend.master')

@section('contains')

@if(session()->has('message'))
<p class="alert alert-success">
{{session()->get('message')}}
</p>
@endif

<form action="{{route('update',$roomtype->id)}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="form-group mb-3">
    
    <input type="file" name="image" class="form-control" id="image" placeholder="Image" value="{{ url('/uploads/roomtype/',$roomtype->image) }}">
  </div>

  
  <select name="room_type" class="form-control mb-3" value="{{$roomtype->room_type}}" >
  
  <option value="single_room">Single Room</option>
  <option value="delux_room">Delux Room</option>
  <option value="suite_room">Suite Room</option>
  <option value="family_room">family Room</option>
  <option value="luxry_room">Luxru Room</option>
</select>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection