<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        $role = Role::query()->create([
            'name' => $request->name,
        ]);

        return $role;
    }

    public function index(Request $request) {
        $roles = Role::all();
        return [
            'status' => 'Success',
            'data' => $roles
        ];
    }
}
