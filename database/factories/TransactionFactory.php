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
        $randTime = mt_rand(7, 20);
        if($randTime < 10) $start_time .= '0' . $randTime;
        else $start_time .= $randTime;

        $half_time = (int) $start_time + 1;
        if ($half_time < 10) $half_time = '0' . $half_time;

        $end_time = (int) $start_time + 2;
        if($end_time < 10) $end_time = '0' . $end_time;

        $date = '2022-';

        $randMonth = mt_rand(1, 12);
        if ($randMonth < 10) $date .= '0' . $randMonth . '-';
        else $date .= $randMonth . '-';
        
        $randDay = mt_rand(1, 30);
        if ($randDay < 10) $date .= '0'. $randDay;
        else $date .= $randDay;

        return [
            //
            'user_id' => mt_rand(1, 4),
            'tutor_id' => mt_rand(1, 80),
            'start_time' => $start_time,
            'half_time' => $half_time,
            'end_time' => $end_time,
            'date' => $date,
            'price' => mt_rand(90, 102),
            'zoom_link' => 'https://zoom.us/' . $this->faker->regexify('[A-Z]{5}[0-4]{3}')

        ];
    }
}
