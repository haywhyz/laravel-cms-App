<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){
        return view('users.index')->with('users', User::all());
        }

        public function update(User $users)
        {
            $users = new User;
            // $users->role = 'admin';
            // $users->save();
            DB::table('users')->where('id', $users)->update([
                
           
                'role'=>'admin'
                
            ]);
            session()->flash('success', 'succesfully make admin');
            return redirect()->back();
            
            
        }
        public function profile(){
            return view('users/profile')->with('users', auth()->user());
        }
}
