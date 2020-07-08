<?php

namespace App\Exports;

use App\excel_test;
use Maatwebsite\Excel\Concerns\FromCollection;

class Exportexcel_test implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return excel_test::all();
    }
}
