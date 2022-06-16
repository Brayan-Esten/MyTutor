<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $start_time = '';
        $rand = mt_rand(7, 20);
        if($rand < 10) $start_time .= '0' . $rand;
        else $start_time .= $rand;



        $date = '2022-';

        $randMonth = mt_rand(1, 12);
        if ($randMonth < 10) $date .= '0' . $randMonth . '-';
        else $date .= $randMonth . '-';
        
        $randDay = mt_rand(1, 30);
        if ($randDay < 10) $date .= '0'. $randDay;
        else $date .= $randDay;


        // $date = '2022' . '-' . mt_rand(1, 12) . '-' . mt_rand(1, 30);

        return [
            //
            'user_id' => mt_rand(1, 4),
            'tutor_id' => mt_rand(1, 80),
            'start_time' => $start_time,
            'date' => $date,
            'price' => 100000,
            'zoom_link' => 'https://zoom.us/' . $this->faker->regexify('[A-Z]{5}[0-4]{3}')

        ];
    }
}
