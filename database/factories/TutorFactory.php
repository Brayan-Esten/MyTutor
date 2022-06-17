<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tutor>
 */
class TutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // schedule randomizer
        $randSchedule = '';
        for($i = 0; $i < 5; $i++){
            $rand = mt_rand(7, 20);
            if($rand < 10) $randSchedule .= '0' . $rand;
            else $randSchedule .= $rand;
            $randSchedule .= ';';
        }


        // instituion and last_ed randomizer
        $institutions = ['School', 'University'];
        $institution = $institutions[mt_rand(0, 1)];

        $ed_list = ['High-School Student', 'College-Student', 'Teacher', 'Lecturer', 'Instructor'];
        if($institution == 'School') $last_ed = $ed_list[mt_rand(0, 1)];
        else $last_ed = $ed_list[mt_rand(2, 3)];


        // teaching approach randomizer
        $approaches = [
            'Interactive', 'Collaborative', 'Detailed Explanation', 
            'Daily Event Analogy', 'Laid Back Approach', 'Storytelling'
        ];
        $teaching_approach = $approaches[mt_rand(0, 5)];


        // rating randomizer
        $rating = 4.0;
        $decimals = mt_rand(1, 100) / 100;
        $rating += $decimals;

        return [
            //
            'subject_id' => $this->faker->numberBetween(1, 24),
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'schedule' => $randSchedule,
            'institution' => $this->faker->city() . ' ' . $institution,
            'last_ed' => $last_ed,
            'bio' => $this->faker->paragraph(1),
            'teaching_approach' => $teaching_approach,
            'rating' => $rating
        ];
    }
}
