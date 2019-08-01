<?php

use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];
        foreach($days as $k=>$v){
            DB::table('days')->insert([
                'name' => $v,
                'status' => ($k<5 ? 1 : 0),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
