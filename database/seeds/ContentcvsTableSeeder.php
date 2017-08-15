<?php

use Illuminate\Database\Seeder;

class ContentcvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(!(DB::table('contentcvs')->first()->id)){
            DB::table('contentcvs')->insert([
                'link' => 'https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAsxAAAAJGJmMGUwNWEyLWQ2ZmEtNDg5Yy1hZDQ0LWY1MmM0MGQ3MmY3Yw.jpg',
                'advanced' => 'PHP,JavaScript,HTML,CSS',
                'basic' => 'C,Python,MySQL',
                'addition' => 'Git,redmine, MarkDown',
            ]);
        }

    }
}
