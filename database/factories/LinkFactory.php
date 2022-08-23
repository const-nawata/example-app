<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use Faker\Generator as Faker;
//use Faker\Generator;

//$faker = Faker\Factory::create();



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        $faker = new Faker();
//        $faker = new Faker();


        return [
            //
            'title' => substr($this->faker->sentence(2), 0, -1),
//            'title' => substr('title title title', 0, -1),
            'url' => $this->faker->url,
            'description' => $this->faker->paragraph,
        ];
    }
}


