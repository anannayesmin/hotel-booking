@extends('backend.master')

@section('contains')

<form action="">
  <div class="form-group mb-3">
   
    <input type="string" class="form-control" id="booking_id" placeholder="Booking  Id">
  </div>
 

 <div class="form-group mb-3">
   
   <input type="date" class="form-control" id="checking_date" placeholder="Checking Date">
 </div>

 

</form>


<button type="submit" class="btn btn-primary">Submit</button>
@endsection