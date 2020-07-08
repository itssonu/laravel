<?php

namespace App\Imports;

use App\excel_test;
use Maatwebsite\Excel\Concerns\ToModel;

class Excel_testImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new excel_test([
            'firstname'     => $row[1],
            'lastname'    => $row[5], 
        ]);
    }
}
