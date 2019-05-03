<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user =  App\User::create([
            
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123@123@'),
            'admin' => 1
        ]);

       App\Profile::create([
           
        'user_id' => $user->id,

        'avatar' => 'uploads/avatars/default.jpg',

        'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget pharetra eros, at vehicula erat. Donec sit amet felis fringilla, laoreet eros quis, porttitor arcu.',
        
        'facebook' => 'facebook.com',
        
        'youtube' => 'youtube.com'


    ]);



    }
}
