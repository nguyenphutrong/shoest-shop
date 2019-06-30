<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => config('shop.email'),
            'email_verified_at' => now(),
            'password' => Hash::make('NguyenPhuTrong'),
            'admin' => 1,
            'approved_at' => now(),
        ]);
    }
}
