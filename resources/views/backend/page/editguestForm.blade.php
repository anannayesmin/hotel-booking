@extends('backend.master')

@section('contains')

@if(session()->has('message'))
<p class="alert alert-success">
{{session()->get('message')}}
</p>
@endif

<form action="{{route('update.guest.form',$guest->id)}}" method="POST">
    @method('PUT')
    @csrf
    

  <div class="form-group mb-3">
    
    <input type="text" name="guest_name" class="form-control" id="guest_name" placeholder="Guest Name"value="{{$guest->guest_name}}">
  </div>

  <div class="form-group mb-3">
    
    <input type="tell" name="guest_phone_number" class="form-control" id="guest_phone_number" placeholder="Guest Phone Number"value="{{$guest->guest_phone_number}}">
  </div>

    <div class="form-group mb-3">
   
    <input type="email" name="guest_email" class="form-control" id="guest_email" placeholder="Guest Email"value="{{$guest->guest_email}}">
    </div>

    <div class="form-group mb-3">
    
    <input type="text" name="guest_username" class="form-control" id="guest_username" placeholder="Guest Username"value="{{$guest->guest_username}}">
    </div>

    <div class="form-group mb-3">
   
    <input type="password" name="guest_password" class="form-control" id="guest_password" placeholder="Guest Password"value="{{$guest->guest_password}}"><br><br>
  </div>

  <div class="form-group mb-3">
   
    <input type="text" name="guest_address" class="form-control" id="guest_address" placeholder="Guest Address"value="{{$guest->guest_address}}"><br><br>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection