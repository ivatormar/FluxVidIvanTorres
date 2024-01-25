<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }
    public function destroy (User $user){
        $user->delete();
        return redirect()->route('admin.users.index')->with('succes','Usuario eliminado correctamente.');
    }

}
