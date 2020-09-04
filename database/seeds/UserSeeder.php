<?php

use App\User;
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
            'name' => 'admin',
            'email' => 'admin',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'Elian',
            'email' => 'elian@elian.com',
            'password' => bcrypt('12345')
        ]);
    }
}
