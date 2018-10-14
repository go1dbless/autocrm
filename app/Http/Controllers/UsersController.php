<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function store(Request $r)
    {
        $user = User::where('login', $r->login)->first();
        if (!$user) {
            User::create([
                'login' => $r->login,
                'name' => $r->name,
                'password' => Hash::make($r->password),
                'post' => $r->post,
                'comment' => $r->comment,
            ]);
            $response = [
                'errors' => 0,
                'message' => 'Пользователь создан'
            ];
        } else {
            $response = [
                'errors' => 1,
                'message' => 'Пользователь с таким логином уже существует'
            ];
        }
        return json_encode($response);

    }
}
