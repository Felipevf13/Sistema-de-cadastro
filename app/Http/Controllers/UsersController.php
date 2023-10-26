<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;

class UsersController extends Controller
{
    public function index() {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password'))
        ]);

        $address = Address::create([
            'user_id' => $user->id, 
            'street' => $request->input('street'),
            'city' => $request->input('city'),
            'state' => $request->input('state')
        ]);
        
        $user->address()->save($address);
        return redirect('/users')->with('success', 'User created successfully!');
    }

    public function show($id)
    {
      $user = User::findOrFail($id);
      return view('users.show', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password'))
        ]);
        if ($user->address){
            $address = $user->address;
            $address->update([
                'street' => $request->input('street'),
                'city' => $request->input('city'),
                'state' => $request->input('state')
            ]);
        }; 
        return redirect("/users/$id")->with('success', 'Profile updated successfully!');
    }
    
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/users')->with('success', 'User deleted successfully!');
    }
}
