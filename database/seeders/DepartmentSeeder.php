<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
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
            'name'  => 'Отдел закупок',
        ];
        $inputs[] = [
            'name'  => 'Отдел продаж',
        ];
        $inputs[] = [
            'name'  => 'PR-отдел',
        ];
        DB::table('departments')->insert($inputs);
    }
}
