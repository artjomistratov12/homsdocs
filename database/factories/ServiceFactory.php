<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'category_id' => \App\Models\Category::factory(), // автоматически создаёт категорию
        ];
    }
}
