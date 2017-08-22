<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

//        if (!(DB::table('images')->first()->photo)){
            DB::table('images')->insert([
                'photo' => 'default.jpg',
            ]);
//        }
    }
}
