<?php

namespace Database\Factories;

use App\Models\UserReviews;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserReviews>
 */
class UserReviewsFactory extends Factory
{
    protected $model = UserReviews::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'content' => $this->faker->paragraph(),
            'star' => 5,
            'picture' => 'doctor_2_carousel.jpg',
            'user_type' => 'Patient',
        ];
    }
}
