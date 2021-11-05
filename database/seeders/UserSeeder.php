<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->getUsers();

        foreach($data as $d) {
            $productos = [];

            $user = User::create($d);

            if($user->id == 1) {
                $productos = $this->getProductsUser1($user->id);
            }

            if($user->id == 2) {
                $productos = $this->getProductsUser2($user->id);
            }

            if($user->id == 3) {
                $productos = $this->getProductsUser3($user->id);
            }

            if($user->id == 4) {
                $productos = $this->getProductsUser4($user->id);
            }
            if($user->id != 5){
                foreach($productos as $p){
                    Product::create($p);
                }
            }

        }
    }

    public function getUsers()
    {
        $data = [
            [
                'name' => 'Diego',
                'email' => 'diego@gmail.com',
                'password' => bcrypt('mi-super-password')
            ],
            [
                'name' => 'Laura',
                'email' => 'laura@gmail.com',
                'password' => bcrypt('mi-super-password')
            ],
            [
                'name' => 'Martin',
                'email' => 'martin@gmail.com',
                'password' => bcrypt('mi-super-password')
            ],
            [
                'name' => 'Diego',
                'email' => 'otrodiego@gmail.com',
                'password' => bcrypt('mi-super-password')
            ],
            [
                'name' => 'Maria',
                'email' => 'maria@gmail.com',
                'password' => bcrypt('mi-super-password')
            ],
        ];

        return $data;
    }

    public function getProductsUser1($userId)
    {
        return [
            [
                'name' => 'Prod 1',
                'description' => '-',
                'unit_price' => 10,
                'quantity' => 2,
                'total_cost' => 20,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 2',
                'description' => '-',
                'unit_price' => 15,
                'quantity' => 3,
                'total_cost' => 45,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 3',
                'description' => '-',
                'unit_price' => 20,
                'quantity' => 5,
                'total_cost' => 100,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 4',
                'description' => '-',
                'unit_price' => 50,
                'quantity' => 1,
                'total_cost' => 50,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 5',
                'description' => '-',
                'unit_price' => 1000,
                'quantity' => 1,
                'total_cost' => 1000,
                'user_id' => $userId
            ],

        ];
    }

    public function getProductsUser2($userId)
    {
        return [
            [
                'name' => 'Prod 34',
                'description' => '-',
                'unit_price' => 25,
                'quantity' => 2,
                'total_cost' => 50,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 31',
                'description' => '-',
                'unit_price' => 250,
                'quantity' => 3,
                'total_cost' => 750,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 3',
                'description' => '-',
                'unit_price' => 20,
                'quantity' => 5,
                'total_cost' => 100,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 455',
                'description' => '-',
                'unit_price' => 50,
                'quantity' => 1,
                'total_cost' => 50,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 523',
                'description' => '-',
                'unit_price' => 849,
                'quantity' => 1,
                'total_cost' => 849,
                'user_id' => $userId
            ],
        ];
    }

    public function getProductsUser3($userId)
    {
        return [
            [
                'name' => 'Prod 1',
                'description' => '-',
                'unit_price' => 10,
                'quantity' => 2,
                'total_cost' => 20,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 2',
                'description' => '-',
                'unit_price' => 15,
                'quantity' => 3,
                'total_cost' => 45,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 3',
                'description' => '-',
                'unit_price' => 20,
                'quantity' => 5,
                'total_cost' => 100,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 4',
                'description' => '-',
                'unit_price' => 50,
                'quantity' => 1,
                'total_cost' => 50,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 5',
                'description' => '-',
                'unit_price' => 1000,
                'quantity' => 1,
                'total_cost' => 1000,
                'user_id' => $userId
            ],
        ];
    }

    public function getProductsUser4($userId)
    {
        return [
            [
                'name' => 'Prod 75',
                'description' => '-',
                'unit_price' => 345,
                'quantity' => 2,
                'total_cost' => 345,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 45',
                'description' => '-',
                'unit_price' => 128,
                'quantity' => 3,
                'total_cost' => 384,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 65',
                'description' => '-',
                'unit_price' => 324,
                'quantity' => 5,
                'total_cost' => 1620,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 86',
                'description' => '-',
                'unit_price' => 50,
                'quantity' => 1,
                'total_cost' => 50,
                'user_id' => $userId
            ],
            [
                'name' => 'Prod 165',
                'description' => '-',
                'unit_price' => 1000,
                'quantity' => 1,
                'total_cost' => 1000,
                'user_id' => $userId
            ],
        ];
    }

}
