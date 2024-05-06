<?php

namespace Database\Seeders;

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
        \DB::table('users')->delete();
        \DB::table('users')->insert(array (
            0=> array(
                'id'=>1,
                'name'=>'kavuma godfrey',
                'username'=>'kavuma godfrey',
                'email'=>'kavumagodfrey@gmail.com',
                'password'=>bcrypt('kavuma123'),
                'role'=>'admin',
                'phone_number'=>'0706072232',
                'profile_picture'=>'/uploads/avarta.png',
            ),
            1=> array(
                'id'=>2,
                'name'=>'tino fortunate',
                'username'=>'tino fortunate',
                'email'=>'tinofortunate@gmail.com',
                'password'=>bcrypt('tino123'),
                'role'=>'student',
                'phone_number'=>'0701174963',
                'profile_picture'=>'/uploads/avarta.png',
            )


        ));
    }
}
