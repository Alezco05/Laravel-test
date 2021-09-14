<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'title' => $this->faker->title(),
                'description' => $this->faker->paragraph(),
                'privacy' => $this->faker->boolean(),
                'uploadDate' => now(), 
                'view' => $this->faker->randomDigit(),
                'imagepath' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/200px-Laravel.svg.png',
                'comment_idComment' => Comment::factory(),  
        ];
    }
}
