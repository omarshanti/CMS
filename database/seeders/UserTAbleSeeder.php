<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserTAbleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','admin@admin.com')->first();

        if(!$user)
        {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'role' => 'ADM',
                'password' => Hash::make('123123'),
            ]);
        }

    }
}
