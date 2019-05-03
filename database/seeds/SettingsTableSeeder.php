<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "laravel's Blog",
            'address' => 'Nairobi, Kenya',
            'contact_number' => '0727487426',
            'contact_email' => 'andrew@gmail.com'
        ]);
    }


}
