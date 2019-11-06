<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new \App\Student();
        $student->name = 'minh';
        $student->phone = '1234667897';
        $student->address = 'ha noi';
        $student->city_id = 1;
        $student->image = 'images/fhkjdsshfkj.jpg';
        $student->save();
    }
}
