<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $producToSearch = 'Prod 3';

//        $users = User::with(['products' => function($q) use ($producToSearch){
//            $q->where('name', $producToSearch);
//        }])->get();

       // $users = User::has('products')->get();

        $users = User::whereHas('products', function($q) use($producToSearch){
            $q->where('name', $producToSearch);
        })->get();

        foreach($users as $user){
            echo '<h3> USUARIO: ', $user->name ,' </h3>';
            $print = '<h4>No posee ' . $producToSearch . '</h4>';

            if(!$user->products->isEmpty()){
                $print = '<h4> PRODUCTS: '. $user->products->pluck('name') . ' </h4>';
            }

            echo $print;
        }
    }
}
