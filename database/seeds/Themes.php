<?php

use Illuminate\Database\Seeder;

class Themes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('themes')->delete();

          $themes = array(

            array('title' => 'Escape Rooms'),
            array('title' => 'Back To School'),
            array('title' => 'Urban Graffiti'),

          );

          DB::table('themes')->insert($themes);
    }
}
