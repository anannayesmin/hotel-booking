<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
                 "name"=>"Annanna",
                 "role"=>"admin",
                 "email"=>"anannayesmin31@gmail.com",
                 "password"=>bcrypt("267036"),
                 "username"=>"admin",
                 "role"=>"admin"
            ]);

           
    
    }
}
