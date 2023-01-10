@extends('backend.master')

@section('contains')

<div class="container">
<h1 class="text-center">Package</h1>
</div>

<a class="btn btn-primary" href="{{route('create')}}">Create</a>

<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Room Number</th>
      <th scope="col">Amenities/Facelities</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($packages as $key=>$data)
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->room->room_number}}</td>
      <td> @foreach($data->amenities as $amenity){{$amenity}}, @endforeach</td>

      <td><a class="btn btn-danger" href="{{route('package.delate',$key + 1)}}">Delete</a>
      <a class="btn btn-primary" href="{{route('edit.package',$key + 1)}}">Edit</a>
    </td>
    </tr>
   @endforeach
  </tbody>
</table>

</div>

@endsection