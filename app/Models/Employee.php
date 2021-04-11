<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'email',
        'last_name',
        'first_name',
        'last_name_kana',
        'first_name_kana',
        'phone_number',
        'birthday',
        'gender',
        'department',
        'occupation',
        'type_of_industry',
        'type_of_work',
        'assignment_level',
        'joining_date',
        'status_no',
        'position',
        'request_status',
        'created_at',
        'updated_at',
    ];

}
