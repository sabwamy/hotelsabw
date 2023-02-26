@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($products as $product)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $room->number }}</td>
	        <td>{{ $room->name }}</td>
            <td>{{ $room->status }}</td>
	        <td>
                <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('rooms.show',$room->id) }}">Show</a>
                    @can('room-edit')
                    <a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('room-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $products->links() !!}



@endsection