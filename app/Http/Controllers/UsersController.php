<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $userData = $request->all();
        $userData['password'] = Hash::make($userData['password']);

        Users::create($userData);
        return redirect()->route('users.index');
    }

    public function show(Users $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(Users $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, Users $user)
    {
        $user->update($request->all());
        return redirect()->route('users.index');
    }

    public function destroy(Users $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
