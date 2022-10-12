<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Phone;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
        public function index()
        {

           //$users= User::orderBy('id','desc')->paginate(10);
            $users= User::paginate(5);
            return view ('users.index')->with('users', $users);
        }
        
        public function create()
        {
            return view('users.create');
        }
      
        public function store(Request $request)
        {
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
            
            $validated['password'] = Hash::make($validated['password']);
            
            User::create($validated);

            return redirect('users')->with('flash_message', 'Users Addedd!'); 
        }
        
        public function show($id)
        {
            $users = User::find($id);
            return view('users.show')->with('users', $users);
        }
        
        public function edit($id)
        {
            $users = User::find($id);
            return view('users.edit')->with('users', $users);
        }
      
        public function update(Request $request,$id)
        {
           $users = User::find($id);
           $input = $request->all();
           $users->update($input);
           return redirect('users')->with('flash_message', 'User Updated!');     
              
        }
      
        public function destroy($id)
        {
            User::destroy($id);
            return redirect('users')->with('flash_message', 'User deleted!');  
        }
        
}
