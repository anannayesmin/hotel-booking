@extends('backend.master')

@section('contains')

@if(session()->has('message'))
<p class="alert alert-success">
{{session()->get('message')}}
</p>
@endif

<form action="{{route('guest.submit.form')}}" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="form-group mb-3">
    
    <input type="text" name="guest_name" class="form-control" id="guest_name" placeholder="Guest Name *" required>
  </div>
  
  <div class="form-group mb-3">
  <label for="" class="form-label">Guest Image</label>
    <input type="file" name="guest_image" class="form-control" id="">
  </div>



  <div class="form-group mb-3">
    
    <input type="tel" name="guest_phone_number" class="form-control" id="guest_phone_number" placeholder="Guest Phone Number *" required>
  </div>

    <div class="form-group mb-3">
   
    <input type="email" name="guest_email" class="form-control" id="guest_email" placeholder="Guest Email *" required>
    </div>

    <div class="form-group mb-3">
    
    <input type="string" name="guest_username" class="form-control" id="guest_username" placeholder="Guest Username *" required>
    </div>

    <div class="form-group mb-3">
   
    <input type="string" name="guest_password" class="form-control" id="guest_password" placeholder="Guest Password *" required>
  </div>

  <div class="form-group mb-3">
   
    <input type="guest_address"name="guest_address" class="form-control" id="guest_address" placeholder="Guest Address *" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection