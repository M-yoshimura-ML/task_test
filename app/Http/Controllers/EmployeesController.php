<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\EmployeesImport;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\phpexcel\IOFactory;

class EmployeesController extends Controller
{
    public function import(){
        $file_name = "employees.xlsx";
        $spreadsheet = new PHPExcel();
        $sheet = $spreadsheet->getSheetByName('import');
        //$reader->setLoadSheetsOnly(array('import'));
        $reader->setReadDataOnly(true);
        Excel::import(new EmployeesImport, $file_name);
        // => laravel/storage/app/employees.xlsx を取得する
    }
}
