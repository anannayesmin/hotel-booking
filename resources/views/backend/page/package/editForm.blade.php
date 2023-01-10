@extends('backend.master')

@section('contains')

@if(session()->has('message'))
<P class="alert alert-message">
{{session()->get('message')}}
</P>
@endif

<form action="" method="POST">
  @csrf
  <div class="form-group mb-3">
   
    <input type="text" name="name" class="form-control" id="name" placeholder="Name *" required>
  </div>
 

 <div class="form-group mb-3">
   
   <input type="text" name="price" class="form-control" id="price" placeholder="Price *" required>
 </div>

 <select name="room_id" class="form-control mb-3">
      @foreach($room as $data )
      <option value="{{$data->id}}">{{$data->room_number}}</option>
      @endforeach
    </select>


 <div class="form-group mb-3">

 <input type="checkbox" name="amenities[]" id="amenities" value="wifi"> Wifi <br />
 <input type="checkbox" name="amenities[]" id="amenities" value="television"> Television <br />
 <input type="checkbox" name="amenities[]" id="amenities" value="barthroom"> Barthroom <br />
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection