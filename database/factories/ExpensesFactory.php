<?php

namespace Database\Factories;

use App\Models\expense;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\expense>
 */
class ExpensesFactory extends Factory
{
    protected $model = expense::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word,
            "amount" => $this->faker->numberBetween(100, 2000),
            "reoccurring" => $this->getRandom([true, false])
        ];
    }
    protected function getRandom($array){
        $index = array_rand($array, 1);
        return $array[$index];
    }
}
