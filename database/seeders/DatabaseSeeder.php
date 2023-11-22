<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Andi Kumala',
        //     'email' => 'astam@aa.com',
        //     'password' => bcrypt('12222222')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Coding',
            'slug' => 'Coder'
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux'
        ]);

        Category::create([
            'name' => 'Editor',
            'slug' => 'Editing'
        ]);

        Post::factory(20)->create();
    }
}
