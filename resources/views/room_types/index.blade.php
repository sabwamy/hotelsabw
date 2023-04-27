@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="/css/style.css">

<div class="width=1200px">
<div class="container-fluid">

<div style="margin:10px;">
    <h2 class="row justify-content-center ">Room types</h2>
  </div> 

  <div class="row " style="margin-left:90px;">
  <div class="col-lg-2">
  <a class="dropdown-item" href="{{url('room_types/create')}}">
   <button type="submit" class="btn btn-success" style="margin-left:0px; margin-top:10px; margin-bottom:10px; padding-right:10px;">Add new room type</button>  
   </a> 
</div>
  </div>

  <div class="row " style="margin-left:90px;">
  <div class="col-lg-2">
  <div class="form-outline w-auto">
          <label class="form-label" for="form1">Search</label>
          <input id="search-input-sidenav" type="search" id="form1" class="form-control" />
          
        </div>
   </div>
  </div> 
<div class="row justify-content-center" >
<div class="col-lg-10 table-responsive ">


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Room type</th>
      <th scope="col">Price</th>
      <th scope="col">Max-occupants</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
     
      
    </tr>
  </thead>
  <tbody>
  @foreach ($room_types as $room_type)
    <tr>
      <td>{{ $room_type->id }}</td></td>
      <td>{{ $room_type->name }}</td>
      <td>{{ $room_type->price }}</td>
      <td>{{ $room_type->Max_occupants }}</td>
      <td>{{ $room_type->Description }}</td>
      <td><button type="button" class="btn btn-primary">Edit</button></td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</div>
@endsection