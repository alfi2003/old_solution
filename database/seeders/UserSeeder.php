<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pw = 'admin123';
        // DB::table('users')->insert([
        //     [
        //         'name'      => 'Admin',
        //         'id_witel'  =>  4,
        //         'password'  => Hash::make($pw),
        //         'email'     => 'admin@gmail.com',
        //     ],
        //     [
        //         'name'      => 'User',
        //         'id_witel'  => 4,
        //         'password'  => Hash::make($pw),
        //         'email'     => 'user@gmail.com',
        //     ],
        // ]);

        $admin   = User::create([
                    'name'      => 'Admin',
                    'id_witel'  => 4,
                    'password'  => Hash::make($pw),
                    'email'     => 'admin@gmail.com',
                ]);
        $admin->assignRole('admin');

        $user   = User::create([
                    'name'      => 'User',
                    'id_witel'  => 4,
                    'password'  => Hash::make($pw),
                    'email'     => 'user@gmail.com',
                ]);
        $user->assignRole('user');
    }
}
