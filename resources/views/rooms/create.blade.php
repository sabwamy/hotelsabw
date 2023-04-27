@extends('layouts.app')

@section('content')


<link href="/css/style.css" rel="stylesheet">
<div class="width=1200px">
<div class ="container-fluid">

<form method="POST" action="{{ route('rooms.store') }}">
 @csrf


        <div class="row justify-content-center" >
            <div class="col-lg-5    ">
            <label for="room_type_id">Room type:</label>
               
               <select class="form-select  @error('room_type_id') is-invalid @enderror" id="room_type_id" name="room_type_id" value="{{ old('room_type_id') }}" required autocomplete="room_type_id" autofocus>
               @foreach ($room_types as $room_type) 
               <option value ="{{ $room_type->id }}" >{{ $room_type->name }}</option>
               @endforeach
               </select>
                                @error('room_type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
           </div>
            </div>

    <div class="row justify-content-center" >     
            
            <div class="col-lg-5 ">
        
            <label for="room_number">Room Number:</label>
               <input type="text" class="form-control  @error('room_number') is-invalid @enderror" id="room_number" placeholder="Enter Room Number" name="room_number" value="{{ old('room_number') }}" required autocomplete="room_number" autofocus>

                                @error('room_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            </div>

            
            
               
               <button type="submit" class="btn btn-success" style="margin-left:360px; margin-top:10px; margin-bottom:10px; padding-right:30px;">Save</button>
           </form>

</div>
</div>

@endsection
