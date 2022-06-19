<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\EduLvl;
use App\Models\Field;
use App\Models\Membership;
use App\Models\Subject;
use App\Models\Tutor;
use App\Models\Transaction;
use App\Models\Voucher;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // pre-defined data

        User::create([
            'membership_id' => 1,
            'name' => 'Brayan Esten',
            'email' => 'brayans10@mail.com',
            'password' => bcrypt('123'),
            'fund' => 500
        ]);


        Membership::create([
            'tier' => 'silver',
            'upgrade_price' => 0
        ]);

        Membership::create([
            'tier' => 'gold',
            'upgrade_price' => 250
        ]);

        Membership::create([
            'tier' => 'diamond',
            'upgrade_price' => 500
        ]);



        EduLvl::create([
            'level' => 'primary'
        ]);

        EduLvl::create([
            'level' => 'junior-high'
        ]);

        EduLvl::create([
            'level' => 'senior-high'
        ]);

        

        Field::create([
            'name' => 'mathematics'
        ]);

        //2
        Field::create([
            'name' => 'english'
        ]);

        //3
        Field::create([
            'name' => 'bahasa'
        ]);

        //4
        Field::create([
            'name' => 'mandarin'
        ]);

        //5
        Field::create([
            'name' => 'science'
        ]);

        //6
        Field::create([
            'name' => 'social'
        ]);

        //7
        Field::create([
            'name' => 'physics'
        ]);

        //8
        Field::create([
            'name' => 'chemistry'
        ]);

        //9
        Field::create([
            'name' => 'biology'
        ]);

        //10
        Field::create([
            'name' => 'accounting'
        ]);

        //11
        Field::create([
            'name' => 'economy'
        ]);

        //12
        Field::create([
            'name' => 'geography'
        ]);

        //13
        Field::create([
            'name' => 'sociology'
        ]);

        //14
        Field::create([
            'name' => 'history'
        ]);


        // primary level

        Subject::create([
            'field_id' => 1,
            'level_id' => 1
        ]);

        Subject::create([
            'field_id' => 2,
            'level_id' => 1
        ]);

        Subject::create([
            'field_id' => 3,
            'level_id' => 1
        ]);

        Subject::create([
            'field_id' => 4,
            'level_id' => 1
        ]);
        Subject::create([
            'field_id' => 5,
            'level_id' => 1
        ]);

        Subject::create([
            'field_id' => 6,
            'level_id' => 1
        ]);
        



        //junior-high level

        Subject::create([
            'field_id' => 1,
            'level_id' => 2
        ]);
        Subject::create([
            'field_id' => 2,
            'level_id' => 2
        ]);
        Subject::create([
            'field_id' => 3,
            'level_id' => 2
        ]);
        Subject::create([
            'field_id' => 4,
            'level_id' => 2
        ]);
        Subject::create([
            'field_id' => 5,
            'level_id' => 2
        ]);
        Subject::create([
            'field_id' => 6,
            'level_id' => 2
        ]);



        //senior-high level
        Subject::create([
            'field_id' => 1,
            'level_id' => 3
        ]);
        Subject::create([
            'field_id' => 2,
            'level_id' => 3
        ]);
        Subject::create([
            'field_id' => 3,
            'level_id' => 3
        ]);
        Subject::create([
            'field_id' => 4,
            'level_id' => 3
        ]);
        Subject::create([
            'field_id' => 7,
            'level_id' => 3
        ]);
        Subject::create([
            'field_id' => 8,
            'level_id' => 3
        ]);
        Subject::create([
            'field_id' => 9,
            'level_id' => 3
        ]);
        Subject::create([
            'field_id' => 10,
            'level_id' => 3
        ]);
        Subject::create([
            'field_id' => 11,
            'level_id' => 3
        ]);
        Subject::create([
            'field_id' => 12,
            'level_id' => 3
        ]);
        Subject::create([
            'field_id' => 13,
            'level_id' => 3
        ]);
        Subject::create([
            'field_id' => 14,
            'level_id' => 3
        ]);



        // using factories


        User::factory(3)->create();

        Tutor::factory(80)->create();

        Voucher::factory(20)->create();

        Transaction::factory(160)->create();

    }
}
