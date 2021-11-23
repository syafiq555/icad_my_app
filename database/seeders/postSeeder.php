<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Post::create([
            'name' => 'seeded',
            'body' => 'sampah'
        ]);
    }
}
