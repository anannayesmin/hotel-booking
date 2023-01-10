

@extends('backend.master')

@section('contains')

@if(session()->has('message'))
<p class="alert alert-success">
{{session()->get('message')}}
</p>
@endif

<form action="{{route('roomtype.submit.form')}}" method="POST" enctype="multipart/form-data">
  
  @csrf
  <div class="form-group mb-3">
    
    <input type="file" name="image" class="form-control" id="image" placeholder="Image*" required>
  </div>

  <div class="form-group mb-3">
    
    <input type="text" name="room_type" class="form-control" id="room_type" placeholder="Enter a Room Type" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection