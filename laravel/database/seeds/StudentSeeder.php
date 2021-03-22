<?php

use Illuminate\Database\Seeder;
use App\Student;
// use Carbon\Carbon;
use Faker\Generator as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 10; $i++){
            $newStudent = new Student();
            $newStudent->name = $faker->name();
            $newStudent->data_nascita = $faker->date();
            $newStudent->citta = $faker->city();
            
            $newStudent->save();
        }
        // SE HO DEI DATI MIEI:
        // $students = [
        //     [
        //         'name' => 'Michele',
        //         'data_nascita' => '30/10/1988',
        //         'citta' => 'Roma',
        //     ],
        //     [
        //         'name' => 'Marco',
        //         'data_nascita' => '15/12/1989',
        //         'citta' => 'Milano',
        //     ],
        //     [
        //         'name' => 'Matteo',
        //         'data_nascita' => '10/11/1987',
        //         'citta' => 'Napoli',
        //     ],
        // ];

        // foreach($students as $student){

        //     $newStudent = new Student();
        //     $newStudent->name = $student['name'];
        //     $newStudent->data_nascita = Carbon::createFromFormat('d/m/Y', $student['data_nascita']);
        //     $newStudent->citta = $student['citta'];

        //     $newStudent->save();
        // }
    }
}
