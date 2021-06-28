<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsToMany('App\Models\Department');
    }
}
