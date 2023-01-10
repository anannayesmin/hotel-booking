@extends('backend.master')

@section('contains')

<form action="">
  <div class="form-group mb-3">
   
    <input type="string" class="form-control" id="user_id" placeholder="User  Id">
  </div>
 
  <div class="form-group mb-3">
   
   <input type="string" class="form-control" id="room_id" placeholder="Room  Id">
 </div>

 <div class="form-group mb-3">
   
   <input type="date" class="form-control" id="checking_date" placeholder="Checking Date">
 </div>

 <div class="form-group mb-3">
   
   <input type="day" class="form-control" id="total_day" placeholder="Total Day">
 </div>

 <div class="form-group mb-3">
   
   <input type="number" class="form-control" id="price" placeholder="Price">
 </div>

</form>


<button type="submit" class="btn btn-primary">Submit</button>
@endsection