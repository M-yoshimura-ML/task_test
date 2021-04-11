<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            // 'company_id' =>'1',
            // 'email' =>$row[4],
            // 'last_name'=>$row[6],
            // 'first_name'=>$row[7],
            // 'last_name_kana'=>$row[8],
            // 'first_name_kana'=>$row[9],
            // 'phone_number'=>$row[3],
            // 'birthday'=>$row[10],
            // 'gender'=>$row[11],
            // 'department'=>$row[12],
            // 'occupation'=>$row[13],
            // 'type_of_industry'=>$row[14],
            // 'type_of_work'=>$row[15],
            // 'assignment_level'=>$row[16],
            // 'joining_date'=>$row[17],
            // 'position'=>'1',
            // 'request_status'=>null,
            // 'created_at'=>null,
            // 'updated_at'=>null
            'company_id' =>'1',
            'email' =>$row['email'],
            'last_name'=>$row['last_name'],
            'first_name'=>$row['first_name'],
            'last_name_kana'=>$row['last_name_kana'],
            'first_name_kana'=>$row['first_name_kana'],
            'phone_number'=>$row['phone_number'],
            'birthday'=>$row['birthday'],
            'gender'=>$row['gender'],
            'department'=>$row['department'],
            'occupation'=>$row['occupation'],
            'type_of_industry'=>$row['type_of_industry'],
            'type_of_work'=>$row['type_of_work'],
            'assignment_level'=>$row['assignment_level'],
            'joining_date'=>$row['joining_date'],
            'status_no'=>'0',
            'position'=>'1',
            'request_status'=>null,
            'created_at'=>null,
            'updated_at'=>null
        ]);
    }
}
