<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function delete(Request $r){
        User::find($r->id)->delete();
        return json_encode([
           'errors'=>0,
           'message'=>'Пользователь удален'
        ]);
    }
    public function index() {
        $users = User::where('login', '<>', 'admin')->get();

        $users = $users->map(function ($user) {
            switch ($user->status){
                case 'active':
                    $status = 'Активен';
            }

            return [
                'id'=>$user->id,
                'name'=>$user->name,
                'post'=>$user->post,
                'accepted'=>date($user->created_at),
                'status'=>$status,
            ];
        });

        return $users->toArray();
    }

    public function store(Request $r) {
        $user = User::where('login', $r->login)->first();
        if (!$user) {
            User::create([
                'login'    => $r->login,
                'name'     => $r->name,
                'password' => Hash::make($r->password),
                'post'     => $r->post,
                'comment'  => $r->comment,
            ]);
            $response = [
                'errors'  => 0,
                'message' => 'Пользователь создан'
            ];
        } else {
            $response = [
                'errors'  => 1,
                'message' => 'Пользователь с таким логином уже существует'
            ];
        }
        return json_encode($response);

    }
}
