<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        $projectTypes = [
            'E-commerce Website',
            'Portfolio Website', 
            'Blog Platform',
            'Task Management App',
            'Weather Dashboard',
            'Social Media App',
            'Learning Management System',
            'Inventory System',
            'Chat Application',
            'Restaurant Website'
        ];

        return [
            'name' => $this->faker->randomElement($projectTypes) . ' - ' . $this->faker->company(),
            'description' => $this->faker->paragraph(2),
            'image' => $this->faker->slug() . '.jpg',
            'demo_url' => $this->faker->boolean(60) ? $this->faker->url() : null,
            'github_url' => 'https://github.com/' . $this->faker->userName() . '/' . $this->faker->slug(),
            'technologies' => $this->faker->randomElements([
                'Laravel', 'React', 'Vue.js', 'JavaScript', 'PHP', 'MySQL',
                'Python', 'Java', 'HTML', 'CSS', 'Tailwind CSS', 'Node.js',
                'MongoDB', 'PostgreSQL', 'Docker', 'AWS'
            ], $this->faker->numberBetween(3, 6)),
            'featured' => $this->faker->boolean(40),
            'status' => $this->faker->randomElement(['completed', 'in_progress', 'planned'])
        ];
    }

    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'featured' => true,
        ]);
    }

    public function completed(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'completed',
        ]);
    }
}