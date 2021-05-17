<?php

namespace Database\Factories;

use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Session::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => 'test' ,
            'last_name'  => 'test' ,
            'chat_id'    => 'test' ,
            'messages'   => 'test' ,
            'full_name'  => 'test'
        ];
    }
}
