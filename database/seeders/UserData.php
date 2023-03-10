<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'BAAK',
                'password' => bcrypt('baak123'),
                'email' => 'baak@pnc.ac.id'
            ],

            [
                'name' => 'Bem',
                'password' => bcrypt('bem123'),
                'email' => 'bem@pnc.ac.id'
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
        //
    }
}
