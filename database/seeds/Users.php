<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $roles = array(
            
            
          array('name' => 'Bized' , 'email' =>'bized@hot.fr' , 'password' => Hash::make('bliltz.3') , 'role_id'=>'1'),

        );

        DB::table('users')->insert($roles);
        factory(App\User::class, 50)->create()->each(function ($user) {
            $user->event()->save(factory(App\Event::class)->make());
        });
        
    }
}
