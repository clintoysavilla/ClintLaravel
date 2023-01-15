<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username'=> 'Clint',
            'email' => 'clintoy@usc.edu.ph',
            'password' => '123'
        ];
    }
}
