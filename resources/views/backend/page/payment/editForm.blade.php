
@extends('backend.master')

@section('contains')

@if(session()->has('message'))
<p class="alert alert-success">
{{session()->get('message')}}
</p>
@endif

<form action="{{route('update.payment.form',$payment->id)}}" method="POST">
 @method('PUT')
  @csrf
  <div class="form-group mb-3">
    
    <input type="" name="payment_guest_id" class="form-control" id="payment_customer_id" placeholder="Payment Guest Id"value="{{$payment->payment_guest_id}}">
  </div>

  <div class="form-group mb-3">
    
    <input type="date" name="payment_date" class="form-control" id="payment_date" placeholder="Payment Date"value="{{$payment->payment_date}}">
  </div>

    <div class="form-group mb-3">
   
    <input type="text" name="payment_amount" class="form-control" id="payment_amount" placeholder="Payment Amount"value="{{$payment->payment_amount}}">
    </div>

    <div class="form-group mb-3">
    <textarea name="payment_description" class="form-control" id="payment_description" placeholder="Payment Decription">{{$payment->payment_decription}}</textarea>


    
    </div>

   

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
