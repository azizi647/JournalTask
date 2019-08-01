<?php

use Illuminate\Database\Seeder;
class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = ['Azerbaycan dili', 'Ingilis dili', 'Rus dili', 'Riyaziyyat', 'Kimya', 'Fizika', 'Informatika', 'Asronomiya'];
        foreach($subjects as $s){
            DB::table('subjects')->insert([
                'name' => $s,
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
