@extends('backend.master')

@section('contains')


@if (session()->has('message'))
    <p class="alert alert-success ">
    {{session()->get ('message') }}
</p>
   @endif

<form action="{{route('hotel.submit.form')}}" method="POST" enctype="multipart/form-data">
  @csrf
 

  <div class="form-group mb-3">
    
    <input type="text" name="hotel_name" class="form-control" id="hotel_name" placeholder="Hotel Name *"required>
  </div>

  <div class="form-group mb-3">
    
    <input type="tell" name="hotel_phone_number" class="form-control" id="hotel_phone_number" placeholder="Hotel Phone Number *" required>
  </div>

    <div class="form-group mb-3">
   
    <input type="email" name="hotel_email" class="form-control" id="hottel_email" placeholder="Hotel Email *" required>
    </div>

    <div class="form-group mb-3">
    
    <input type="text" name="hotel_city" class="form-control" id="hotel_city" placeholder="Hotel City *" required>
    </div>

    <div class="form-group mb-3">
   
    <input type="text" name="hotel_address" class="form-control" id="hotel_address" placeholder="Hotel Address *" required>
  </div>

  <div class="form-group mb-3">
   
  <textarea name="hotel_decription" class="form-control" id="hotel_decription" placeholder="Hotel Decription *" required></textarea>
  </div>

  <div class="form-group mb-3">
  <label for="" class="form-label">Hotel Image</label>
    <input type="file" name="hotel_image" class="form-control" id="">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection