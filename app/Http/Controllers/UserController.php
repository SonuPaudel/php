<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'required'

        ]);
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect(route('user.index'))->with('success', 'User Added Successfully');
    }
}
