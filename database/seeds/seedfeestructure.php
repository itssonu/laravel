<?php

use App\feestructure;
use Illuminate\Database\Seeder;

class seedfeestructure extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($m = 1; $m <= 6; $m++) {
            $class = array("1st", "2nd", "3rd", "4th", "5th", "6th");
            $fee = array(500, 600, 500, 420, 458, 456);
            $groupfee = array(400, 120, 500, 450, 458, 250);
            $otherfee = array(400, 120, 500, 450, 458, 250);
            feestructure::create([
                'class' => "1st",
                'fee' => 500,
                'groupfee' =>400,
                'otherfee' => 400,
            ]);
        }
    }
}
