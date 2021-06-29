<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputs = [];
        $inputs[] = [
            'department_id' => 2,
            'employee_id'   => 1,
        ];
        $inputs[] = [
            'department_id' => 1,
            'employee_id'   => 2,
        ];
        $inputs[] = [
            'department_id' => 2,
            'employee_id'   => 3,
        ];
        $inputs[] = [
            'department_id' => 3,
            'employee_id'   => 3,
        ];
        DB::table('department_employee')->insert($inputs);
    }
}
