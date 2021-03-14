<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create(['name' => 'Company 1', 'comercial_name' => 'c1', 'cnpj' => '98.806.242/0001-71']);
        Company::create(['name' => 'Company 2', 'comercial_name' => 'c2', 'cnpj' => '37.952.483/0001-34']);

        Company::create(['name' => 'Subsidiary 1', 'comercial_name' => 'Sb1', 'cnpj' => '50.405.902/0001-86', 'company_id' => 1]);
        Company::create(['name' => 'Subsidiary 2', 'comercial_name' => 'Sb2', 'cnpj' => '28.638.810/0001-97', 'company_id' => 1]);
        Company::create(['name' => 'Subsidiary 3', 'comercial_name' => 'Sb3', 'cnpj' => '75.345.734/0001-01', 'company_id' => 1]);

        Company::create(['name' => 'Subsidiary 4', 'comercial_name' => 'Sb4', 'cnpj' => '00.000.000/0001-00', 'company_id' => 2]);
        Company::create(['name' => 'Subsidiary 5', 'comercial_name' => 'Sb5', 'cnpj' => '00.000.000/0001-01', 'company_id' => 2]);
        Company::create(['name' => 'Subsidiary 6', 'comercial_name' => 'Sb6', 'cnpj' => '00.000.000/0001-02', 'company_id' => 2]);
    }
}
