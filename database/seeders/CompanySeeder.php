<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanySetting::create([
            'name' => 'BPJSTK Preneur',
            'email' => 'info@example.com',
            'phone' => '+012 345 67890',
            'meta_description' => 'Jual Beli Emas tanpa surat',
            'meta_keyword' => 'Jual Beli Emas tanpa surat',
            'about' => '.',
            'logo' => 'assets/logo.png',
            'icon' => 'assets/icon.png',
            'address' => '123 Street, New York, USA'
        ]);
    }
}
