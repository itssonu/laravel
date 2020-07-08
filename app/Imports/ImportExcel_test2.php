<?php

namespace App\Imports;

use App\excel_test2;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportExcel_test2 implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new excel_test2([
            'country' => $row[1],
            'number' => $row[0],
        ]);
    }
}
