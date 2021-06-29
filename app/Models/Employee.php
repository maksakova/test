<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'second_name',
        'last_name',
        'sex',
        'salary',
    ];

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_employee', 'employee_id');
    }
}
