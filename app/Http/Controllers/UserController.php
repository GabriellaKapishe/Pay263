<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('users.list')->with('users', $users);
    }

    public function create()
    {
        return view('users.create');
    }


    public function edit($id)
    {
        $user=User::where('id','=',$id)->first();
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'user_name' => 'required',
        //     'user_email' => 'required',
          
        // ]);

        $user = user::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->role = $request->get('role');
        $user->status = $request->get('status');
        $user->save();
    
        $user->update($request->all());
    
        return redirect()->route('users.list')
                        ->with('success','User updated successfully');
    }
}

       