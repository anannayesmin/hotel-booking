@extends('backend.master')

@section('contains')

<div class="container">
<h1 class="text-center">Details</h1>
</div>

<a class="btn btn-primary" href="{{route('booking.create')}}">Create</a>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Booking Id</th>
      <th scope="col">User Email</th>
      <th scope="col">Checking Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>
</div>
@endsection