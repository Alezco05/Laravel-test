<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Photo;
use App\Models\Member;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

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
            'member_idMember' => Member::factory(), 
            'location_iLocation' => Location::factory(), 
            'photo_idPhoto' => Photo::factory(),  
        ];
    }
}
