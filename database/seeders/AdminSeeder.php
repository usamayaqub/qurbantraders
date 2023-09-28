<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usercheck = User::where('email', 'info@qurban-traders.com')->first();
        if ($usercheck != null){
            $usercheck->delete();
        }
        $user = new User();
        $user->name = 'Qurban Traders Admin';
        $user->email = 'info@qurban-traders.com';
        $user->password = Hash::make('Qurbantraders@321');
        $user->is_admin = 1;
        $user->save();
    }
}
