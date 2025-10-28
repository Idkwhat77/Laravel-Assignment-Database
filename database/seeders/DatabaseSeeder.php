<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Blog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create experiences (fake data)
        Experience::factory()->count(5)->create();
        Experience::factory()->current()->create(); // One current job
        
        // Create projects (fake data)
        Project::factory()->count(8)->create();
        Project::factory()->featured()->completed()->count(5)->create(); // Featured projects
        
        // Create blog posts (fake data)
        Blog::factory()->published()->count(6)->create();
        Blog::factory()->draft()->count(2)->create();
    }
}