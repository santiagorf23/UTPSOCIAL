<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Facades\App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.profile');
    }

    public function store(LoginRequest $request) {
        User::saveOrUpdate($request->all());
        return redirect()->route('post', auth()->user()->username);
    }

}
