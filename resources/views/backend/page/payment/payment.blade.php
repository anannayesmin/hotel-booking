@extends('backend.master')
@section('contains')

<div class="container">
    <h2 class="text-center">Payment</h2>
</div>

<a class="btn btn-primary"href="{{route('Payment.create.form')}}">Create</a>
<div class="container">


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Guest Id</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Decription</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>

  {{--@dd($Payment->all())--}}

    @foreach($payment as $Payment)
    <tr>
    <th scope="row">{{$Payment->id}}</th>
    <td>{{$Payment->payment_guest_id}}</td>
      <td>{{$Payment->payment_date}}</td>
      <td>{{$Payment->payment_amount}}</td>
      <td>{{$Payment->payment_decription}}</td>
      <td><a class="btn btn-danger" href="{{route('delete.payment',$Payment->id)}}">Delete</a>
      <a class="btn btn-primary" href="{{route('edit.payment',$Payment->id)}}">Edit</a>
    </td>
    </tr>

  
    @endforeach
  </tbody>
</table>
</div>
@endsection