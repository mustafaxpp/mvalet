<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "moustafa";
        $user->email = "mostafa@admin.com";
        $user->phone = "01203706439";
        $user->role = "Admin";
        $user->password = Hash::make(12345678);
        $user->save();
    }
}
