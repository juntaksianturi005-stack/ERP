<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name'         => 'PT. PELALAWAN',
            'address'      => 'Jl. Raya Pelalawan No. 123, Pelalawan, Indonesia',
            'email'        => 'info@pelalawan.co.id',
            'phone-number' => '+62 123 4567 890',
        ]);
    }
}
