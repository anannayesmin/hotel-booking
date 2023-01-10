@extends('backend.master')

@section('contains')
<div class="container">
    <h2 class="text-center">Hotel Setup</h2>
</div>

 <a class="btn btn-primary" href="{{route('hotel.create.form')}}">Create</a><br><br>

<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"> Id</th>
      
      <th scope="col"> Name</th>
      <th scope="col"> Image</th>
      <th scope="col"> Phone Number</th>
      <th scope="col"> Email</th>
      <th scope="col"> City</th>
      <th scope="col">Address</th>
      <th scope="col"> Decription</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>

   
    @foreach($hotel as $Hotel)
    
    <tr>
      <th scope="row">{{$Hotel->id}}</th>
     
      <td>{{$Hotel->hotel_name}}</td>
      <td><img width="70px" src="{{ url('/uploads/hotel/',$Hotel->hotel_image) }}" alt="" srcset=""></td>
      <td>{{$Hotel->hotel_phone_number}}</td>
      <td>{{$Hotel->hotel_email}}</td>
      <td>{{$Hotel->hotel_city}}</td>
      <td>{{$Hotel->hotel_address}}</td>
      <td>{{$Hotel->hotel_decription}}</td>
      <td><a class="btn btn-danger"href="{{route('delete.hotel',$Hotel->id)}}">Delete</a>
      
      <a class="btn btn-success"href="{{route('edit.hotel',$Hotel->id)}}">Edit</a>
    </td>
      
    </tr>
   
    @endforeach
    {{ $hotel->links() }}
   

  </tbody>
</table>
</div>

@endsection