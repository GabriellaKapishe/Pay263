<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Agent;


class DeviceController extends Controller
{

     //show devices
     public function show()
     {
         $device = Device::all();
         return view('devices.list')->with('device', $device);
     }
 
 
    //create page
    public function create($id) {
        $agent=Agent::where('id', '=', $id) ->first();
        return view('devices.create',compact('agent'));
    }

    //store devices
    public function store(Request $request){
       // return $request->all();
        $device = new Device();
        $device->imei=$request->imei;
        $device->status=$request->status;
        $device->name=$request->name;
        $device->pos_sim_number=$request->pos_sim_number;
        $device->agent_id=$request->agent_id;
        $device->terminal_id=$request->terminal_id;
        $device->serial_number=$request->serial_number;
        $device->pos_type=$request->pos_type;
        $device->save();

        // return redirect()->route('devices.create')
        //                 ->with('success','Device created successfully.');

        return redirect()->back()->with('success', 'Device created successfully');
     
    }
}
