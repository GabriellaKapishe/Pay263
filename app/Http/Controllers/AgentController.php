<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Agent;


class AgentController extends Controller
{

    //show agents
    public function show()
    {
        $agent = Agent::all();
        return view('agents.list')->with('agent', $agent);
    }


    //create page
    public function create(){
        $agent=Agent::all();
        return view('agents.create',compact('agent'));
    }

    //store agents
    public function store(Request $request){
        $agent = new Agent();
        $agent->firstname=$request->firstname;
        $agent->lastname=$request->lastname;
        $agent->account=$request->account;
        $agent->email=$request->email;
        $agent->cellphone=$request->cellphone;
        $agent->suburb=$request->suburb;
        $agent->city=$request->city;
        $agent->save();

        return redirect()->route('agents.list')
                        ->with('success','Merchant created successfully.');
     
    }
}