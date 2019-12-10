<?php

use StudentsForum\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;

class ChannelsTableSeeder extends Seeder
{
    /**
     * 
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'All Department',
            'slug' => str_slug('All Department')
        ]);

        Channel::create([
            'name' => 'Computer Science & Engineering',
            'slug' => str_slug('Computer Science & Engineering')
        ]);

        Channel::create([
            'name' => 'Electrical & Electronics Engineering',
            'slug' => str_slug('Electrical & Electronics Engineering')
        ]);

        Channel::create([
            'name' => 'BBA',
            'slug' => str_slug('BBA')
        ]);

        Channel::create([
            'name' => 'English',
            'slug' => str_slug('English')
        ]);

        Channel::create([
            'name' => 'Economics',
            'slug' => str_slug('Economics')
        ]);

        Channel::create([
            'name' => 'LLB',
            'slug' => str_slug('LLB')
        ]);
    }
}
