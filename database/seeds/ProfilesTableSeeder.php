<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('profiles')->delete();
        \DB::table('profiles')->insert(array(
            0 => 
            array(
                'id' => 1,
                'gender' => 'male',
            ),
            1 => 
            array(
                'id' => 2,
                'gender' => 'male',
            ),
            2 => 
            array(
                'id' => 3,
                'gender' => 'male',
            ),
            3 => 
            array(
                'id' => 4,
                'gender' => 'male',
            ),
        ));
    }
}
