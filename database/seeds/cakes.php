<?php

use Illuminate\Database\Seeder;
use App\Gallery;

class cakes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<122; $i++) {
            Gallery::firstOrCreate([
                'id' => $i,
                'filename' => 'images/torty/tort('.$i.').jpg',
                'tag' => 'wedding'
            ]);
        }
    }
}
