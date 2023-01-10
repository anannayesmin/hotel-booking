@extends('backend.master')

@section('contains')

@if(session()->has('message'))
<p class="alert alert-success">
{{session()->get('message')}}
</p>
@endif

<form action="{{route('update.hotel.form',$hotel->id)}}" method="POST">
  @method('PUT')
  @csrf

 

  <div class="form-group mb-3">

    <input type="text" name="hotel_name" class="form-control" id="hotel_name" placeholder="Hotel Name" value="{{$hotel->hotel_name}}">
  </div>

  <div class="form-group  mb-3">

    <input type="tel" name="hotel_phone_number" class="form-control" id="hotel_phone_number" placeholder="Hotel Phone Number" value="{{$hotel->hotel_phone_number}}">
  </div>

  <div class="form-group  mb-3">

    <input type="email" name="hotel_email" class="form-control" id="hotel_email" placeholder="Hotel Email" value="{{$hotel->hotel_email}}">
  </div>

  <div class="form-group  mb-3">
    <input type="text" name="hotel_city" class="form-control" id="hotel_city" placeholder="Hotel City" value="{{$hotel->hotel_city}}">
  </div>
  <div class="form-group  mb-3">
    <input type="file" name="hotel_image" class="form-control" id="">
  </div>

  <div class="form-group  mb-3">

    <input type="text" name="hotel_address" class="form-control" id="hotel_address" placeholder="Hotel Address" value="{{$hotel->hotel_address}}">
  </div>

  <div class="form-group mb-3">

    <textarea name="hotel_decription" class="form-control" id="hotel_decription" placeholder="Hotel Decription">{{$hotel->hotel_decription}}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection