<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room_type;


class RoomTypeController extends Controller
{
    public function index()
    {
        $room_types = Room_type::orderBy('id','desc')->paginate(5);
        return view('room_types.index', compact('room_types'));
        //return view('room_types.index');
    }
    
    
    public function create()
    {
        return view('room_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:room_types',
            'price' => 'required',
            'Max_occupants' => 'required',
            'description' => 'required',
        ]);
        
        Room_type::create($request->post());

        return redirect()->route('room_types.index')->with('success','Company has been created successfully.');
    }

    public function edit(Room_type $room_type)
    {
        //return view('room_types.edit',compact('room_type'));
        return view('room_types.edit');
        //$room_types = Room_type::orderBy('id','desc')->paginate(5);
       // return view('room_types.edit', compact('room_types'));
    }
    

    public function show()
    {
        
    }
}
    
