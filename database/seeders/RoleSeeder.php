<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RoleSeeder extends Seeder
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
        $role = [
            array('name' => 'admin','created_at' => $date,'updated_at' => $date),
            array('name' => 'guru','created_at' => $date,'updated_at' => $date),
            array('name' => 'siswa','created_at' => $date,'updated_at' => $date),
        ];
        Role::insert($role);
    }
}
