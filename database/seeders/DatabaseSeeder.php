<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Blog;
use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Blog::truncate();
        Category::truncate();

        $frontend=Category::factory()->create(['name'=>'frontend']);
        $backend=Category::factory()->create(['name'=>'backend']);

        Blog::factory(20)->create(['category_id'=>$frontend->id]);
        Blog::factory(20)->create(['category_id'=>$backend->id]);
    }
}
