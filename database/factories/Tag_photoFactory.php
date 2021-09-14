<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\Tag_photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class Tag_photoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag_photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo_idPhoto' => Photo::factory(),
        ];
    }
}
