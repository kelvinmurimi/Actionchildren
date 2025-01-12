<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        $title = $this->faker->sentence;
        $slug = Str::slug($title, '-');
        return [
            //
            'title' => $title,
            'slug' => $slug,

            'description' => $this->faker->realText($maxNbChars = 80),

            'image' => 'seeder/img_' . rand(1, 12) . '.jpg', //$this->faker->imageUrl(640,480),

            'details' => $this->faker->text(500),

        ];
    }
}
