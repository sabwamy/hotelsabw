<?php
    
namespace App\Http\Controllers;
    
use App\Models\Room;
use App\Models\Room_type;
use Illuminate\Http\Request;
    
class RoomController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:room-list|room-create|room-edit|room-delete', ['only' => ['index','show']]);
         $this->middleware('permission:room-create', ['only' => ['create','store']]);
         $this->middleware('permission:room-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:room-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        $room_types = Room_type::all();
        $rooms = Room::latest()->paginate(5);
        return view('rooms.index',compact('rooms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        $room_types = Room_type::all();

        return view('rooms.create', ['room_types' => $room_types]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room_types = Room_type::all();
        
       //$rooms = Room::all();
        $request->validate([
            'room_type_id' => 'required',
            'room_number' => 'required',
            
            
        ]);
        
        $room = Room::create([
            'room_type_id' => $request->input('room_type_id'),
            'room_number' => $request->input('room_number'),
            'status' => 'vacant'
            ]);
    
        return redirect()->route('rooms.index')
                        ->with('success','Product created successfully.');
                         
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('rooms.show',compact('room'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('rooms.edit',compact('room'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $room->update($request->all());
    
        return redirect()->route('rooms.index')
                        ->with('success','room updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $rooms)
    {
        $rooms->delete();
    
        return redirect()->route('roomss.index')
                        ->with('success','rooms deleted successfully');
    }
}