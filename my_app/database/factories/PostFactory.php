<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'name'=>$this->faker->name(5),
                'lastname'=>$this->faker->lastname(10),
                'age'=>random_int(10,30),
                'uname_id'=>University::get()->random()->id,
                ];
    }
}
