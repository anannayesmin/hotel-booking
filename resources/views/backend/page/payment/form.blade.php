@extends('backend.master')

@section('contains')

@if(session()->has('message'))
<p class="alert alert-success">
{{session()->get('message')}}
</p>
@endif

<form action="{{route('payment.submit.form')}}" method="POST">
  @csrf
  <div class="form-group mb-3">
    
    <input type="" name="payment_guest_id" class="form-control" id="payment_guest_id" placeholder="Payment Guest Id *" required>
  </div>

  <div class="form-group mb-3">
    
    <input type="date" name="payment_date" class="form-control" id="payment_date" placeholder="Payment Date *" required>
  </div>

    <div class="form-group mb-3">
   
    <input type="text" name="payment_amount" class="form-control" id="payment_amount" placeholder="Payment Amount *" required>
    </div>

    <div class="form-group mb-3">
    <textarea name="payment_decription" class="form-control" id="payment_decription" placeholder="Payment Decription *" required></textarea>


    
    </div>

   

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection