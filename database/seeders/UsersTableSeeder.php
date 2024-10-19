<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([

        'name'=>'admin',
        'email'=>'admin@gmail.com',
        'address'=>'uttara',
        'role'=>'admin',
        'mobile'=>'01674644655',
        'password'=>bcrypt('123456'),
        //  'cemail'=>'company@gmail.com',
        //  'cpassword'=>bcrypt('12345')
        ]);
    }
}
