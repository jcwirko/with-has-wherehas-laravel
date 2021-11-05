<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereHas('products', function($q){
            $q->where('products.id',1);
        })->get();

        dump($users);
    }
}
