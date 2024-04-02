<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User:: create([
            'email' => 'astuzon@gmail.com',
            'password' => $this->generatePassword(),
            'office_unit_id' => 2,
        ]);
        User:: create([
            'email' => 'bergs@gmail.com',
            'password' => $this->generatePassword(),
            'office_unit_id' => 1,
        ]);
        
    }

        public function generatePassword()
    {
        $newPassword = "qwerty54321";

        return $this->password = Hash::make($newPassword);
    }
}
