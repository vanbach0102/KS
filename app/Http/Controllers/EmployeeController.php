<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExcelExport;
use App\Imports\ExcelImport;

class EmployeeController extends Controller
{
    public function addEmployee(){

        $employee = [
            ["name" =>"Bách","email" =>"bach@gmail.com", "phone" => "0812895548", "salary"=>"20000","department"=>"Accouting"],
            ["name" =>"Bách1","email" =>"bach1@gmail.com", "phone" => "0812895548", "salary"=>"20000","department"=>"Accouting"],
            ["name" =>"Bách2","email" =>"bach2@gmail.com", "phone" => "0812895548", "salary"=>"20000","department"=>"Accouting"],
            ["name" =>"Bách3","email" =>"bach3@gmail.com", "phone" => "0812895548", "salary"=>"20000","department"=>"Accouting"],
            ["name" =>"Bách4","email" =>"bach4@gmail.com", "phone" => "0812895548", "salary"=>"20000","department"=>"Accouting"],
        ];
        Employee::insert($employee);
        return "Inserted";
    }
    public function export(){
        return Excel::download(new ExcelExport,'employee.xlxs');
    }
    public function import()
    {
        Excel::import(new ExcelImport, 'employee.xlsx');

        return redirect('/')->with('success', 'All good!');
    }
}
