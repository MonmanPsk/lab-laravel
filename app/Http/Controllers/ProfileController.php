<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $name = $request->query('name', 'User');
        $age = $request->query('age');
        $role = $request->query('role', 'Guest');

        return view('profile', [
            'name' => $name,
            'age' => $age,
            'role' => $role,
        ]);
    }
}
