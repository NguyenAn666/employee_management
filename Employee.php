<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $fillable = [
        'id',
        'employee_name',
        'employee_address',
        'employee_phone',
        'employee_email',
        'employee_salary'
    ];
}
