<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::create([
            'name' => 'Cash',
            'balance' => 1000.20,
        ]);

        Account::create([
            'name' => 'Bank',
            'balance' => 2000.50,
        ]);
    }
}
