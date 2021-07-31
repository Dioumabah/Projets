<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
     public function addRole()
    {
        $roles = [
            [
                "name"=>"Super Admin",
            ],
            [
                "name"=>"Admin",
            ],
            [
                "name"=>"User",
            ]
            ];
    Role::insert($roles);

    return "Role has been inserted successfully";
    }

    public function addUser()
    {
        $user = [
            [
                "name"=>"Bmd Technologies",
                "email"=>"bmddevtest93@gmail.com",
                "password"=>Hash::make("Diouma@93"),
                "role_id"=>1
            ]
            ];
            User::insert($user);
            return "User has been inserted successfully";
    }
}
