<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Tag_photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(), 
            'tag_photos_idTag_photos' => Tag_photo::factory(),
        ];
    }
}
