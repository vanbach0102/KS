<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;
class ExcelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Employee([
            'name' => $row[0],
            'email' => $row[1],
            'phone' => $row[2],
            'salary' => $row[3],
            'department' => $row[4],
        ]);
    }

}
