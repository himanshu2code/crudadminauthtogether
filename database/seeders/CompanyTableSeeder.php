<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\companies;
use App\Database\factories\CompanyFactory;
use Carbon\Carbon;
//namespace Database\Seeders;
use App\Models\admin;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{

    protected $model = companies::class;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       // \App\Models\companies::factory('factories/CompanyFactory')->create();
        //\App\Models\companies::CompanyFactory->times(20)->create();
    }
}
