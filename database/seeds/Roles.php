<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->delete();

          $roles = array(

            array('name' => 'admin'),
            array('name' => 'contributeur'),

          );

          DB::table('roles')->insert($roles);
    }
}
