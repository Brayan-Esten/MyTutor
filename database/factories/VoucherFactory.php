<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voucher>
 */
class VoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $membership_id = mt_rand(1, 3);
        $pool = [5, 10, 15, 20, 25];
        $discount = 0;

        if($membership_id == 1) $discount = $pool[mt_rand(0, 1)];
        if($membership_id == 2) $discount = $pool[mt_rand(1, 2)];
        if($membership_id == 3) $discount = $pool[mt_rand(3, 4)];

        return [
            //
            'membership_id' => $membership_id,
            'voucher_code' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'discount' => $discount,
        ];
    }
}
