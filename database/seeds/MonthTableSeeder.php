<?php

use Illuminate\Database\Seeder;
use App\month;

class MonthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($m = 1; $m <= 12; $m++) {
            $month = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
            // echo $month. '<br>';

            month::create([
                'month' => $month,
            ]);
        }
    }
}
