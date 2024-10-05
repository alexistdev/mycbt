<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
         * Author: AlexistDev
         * Email: Alexistdev@gmail.com
         * Phone: 082371408678
         * Github: https://github.com/alexistdev
         */

    public function run(): void
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $user = [
            array('role_id' => '1',  'email' => 'admin@gmail.com','password' => Hash::make('1234'),'status' => 1,'created_at' => $date,'updated_at' => $date),
            array('role_id' => '3',  'email' => 'user@gmail.com','password' => Hash::make('1234'),'status' => 1,'created_at' => $date,'updated_at' => $date),
            array('role_id' => '2',  'email' => 'jiwa@gmail.com','password' => Hash::make('1234'),'status' => 1,'created_at' => $date,'updated_at' => $date),
            array('role_id' => '2',  'email' => 'jasmani@gmail.com','password' => Hash::make('1234'),'status' => 1,'created_at' => $date,'updated_at' => $date),
            array('role_id' => '2',  'email' => 'psikologi@gmail.com','password' => Hash::make('1234'),'status' => 1,'created_at' => $date,'updated_at' => $date),
            array('role_id' => '2',  'email' => 'umum@gmail.com','password' => Hash::make('1234'),'status' => 1,'created_at' => $date,'updated_at' => $date),
            array('role_id' => '2',  'email' => 'matematika@gmail.com','password' => Hash::make('1234'),'status' => 1,'created_at' => $date,'updated_at' => $date),
            array('role_id' => '2',  'email' => 'inggris@gmail.com','password' => Hash::make('1234'),'status' => 1,'created_at' => $date,'updated_at' => $date),
            array('role_id' => '2',  'email' => 'kebangsaan@gmail.com','password' => Hash::make('1234'),'status' => 1,'created_at' => $date,'updated_at' => $date),

        ];
        User::insert($user);
    }
}
