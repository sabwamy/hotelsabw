@extends('layouts.app')

@section('content')
<div class="row justify-content-center" >
<div class="col-lg-10 table-responsive ">


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Room type</th>
      <th scope="col">Room number</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
     
      
    </tr>
  </thead>
  <tbody>
  @foreach ($rooms as $room)
    <tr>
      <td>{{ $room->id }}</td></td>
      <td>{{ $room->room_type_id }}</td>
      <td>{{ $room->room_number }}</td>
      <td>{{ $room->status }}</td>
      <td><button type="button" class="btn btn-primary">Edit</button></td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>
      
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection