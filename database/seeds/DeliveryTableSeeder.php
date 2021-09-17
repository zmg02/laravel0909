<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delivery')->insert([
            [
                'name' => 'T' . substr(md5(time()), 0, 3) . rand(10,99),
                'freight_calculation_formula' => rand(0, 1),
                'is_standard' => rand(0, 1),
                'status' => rand(0, 1),
                'price' => rand(7, 15),
                'create_time' => strtotime('-10 day') + rand(86400, 864000),
                'update_time' => strtotime('-10 day') + rand(86400, 864000),
            ],[
                'name' => 'T' . substr(md5(time()), 0, 3) . rand(10,99),
                'freight_calculation_formula' => rand(0, 1),
                'is_standard' => rand(0, 1),
                'status' => rand(0, 1),
                'price' => rand(7, 15),
                'create_time' => strtotime('-10 day') + rand(86400, 864000),
                'update_time' => strtotime('-10 day') + rand(86400, 864000),
            ],[
                'name' => 'T' . substr(md5(time()), 0, 3) . rand(10,99),
                'freight_calculation_formula' => rand(0, 1),
                'is_standard' => rand(0, 1),
                'status' => rand(0, 1),
                'price' => rand(7, 15),
                'create_time' => strtotime('-10 day') + rand(86400, 864000),
                'update_time' => strtotime('-10 day') + rand(86400, 864000),
            ],[
                'name' => 'T' . substr(md5(time()), 0, 3) . rand(10,99),
                'freight_calculation_formula' => rand(0, 1),
                'is_standard' => rand(0, 1),
                'status' => rand(0, 1),
                'price' => rand(7, 15),
                'create_time' => strtotime('-10 day') + rand(86400, 864000),
                'update_time' => strtotime('-10 day') + rand(86400, 864000),
            ],
        ]);
    }
}
