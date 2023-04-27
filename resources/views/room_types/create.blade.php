@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="/css/style.css">
      
        <div class="width=1200px">
         <div class="container-fluid">
            <form method="POST" action="{{ route('room_types.store') }}">
            @csrf

            <div class="row justify-content-center">
                <h2 >Add new room type</h2>
             </div>

            <div class="row justify-content-center" >

            
            
            <div class="col-lg-4 ">
        
            <label for="name">Room type:</label>
               <input type="text" class="form-control  @error('fisrtName') is-invalid @enderror" id="name" placeholder="Enter room type name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <div class="col-lg-4">
            <label for="price">Price</label>
            <input type="text" class="form-control  @error('fisrtName') is-invalid @enderror" id="price" placeholder="Enter price" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
               
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <div class="col-lg-8">
            <label for="Max_occupants">Max_occupants</label>
               
               <select class="form-select  @error('Max_occupants') is-invalid @enderror" id="Max_occupants" name="Max_occupants" value="{{ old('Max_occupants') }}" required autocomplete="Max_occupants" autofocus>
                <option value ="1" >1</option>
                <option value ="2" >2</option>
                <option value ="3" >3</option>
                <option value ="4" >4</option>   

                               
                
               </select>

                         @error('Max_occupants')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                

            </div>

            <div class="col-lg-8">
            <label for="description">Description</label>
            <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" rows="3" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            </div>
            

            <button type="submit" class="btn btn-success" style="margin-left:200px; margin-top:10px; margin-bottom:10px; padding-right:30px;">Save</button>
           </form>
           </div>    
        </div>  
             
     
@endsection