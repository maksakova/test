<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
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
            'first_name'  => 'Иван',
            'second_name' => 'Иванович',
            'last_name'   => 'Йода',
            'sex'         => 'мужской',
            'salary'      => '1000',
        ];
        $inputs[] = [
            'first_name'  => 'Петр',
            'second_name' => 'Петрович',
            'last_name'   => 'Вейдер',
            'sex'         => 'мужской',
            'salary'      => '1500',
        ];
        $inputs[] = [
            'first_name'  => 'Ольга',
            'second_name' => 'Олеговна',
            'last_name'   => 'Кеноби',
            'sex'         => 'женский',
            'salary'      => '1400',
        ];
        DB::table('employees')->insert($inputs);
    }
}
