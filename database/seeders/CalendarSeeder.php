<?php

namespace Database\Seeders;

use App\Models\Calendar;
use Illuminate\Database\Seeder;
use function now;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Calendar::insert([
            [
                'giorno' => '1',
                'orario' => '10:00',
                'course_id' => 8,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '1',
                'orario' => '13:30',
                'course_id' => 24,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '1',
                'orario' => '13:30',
                'course_id' => 25,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '1',
                'orario' => '17:00',
                'course_id' => 26,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '1',
                'orario' => '18:30',
                'course_id' => 27,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '1',
                'orario' => '19:30',
                'course_id' => 25,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '2',
                'orario' => '13:30',
                'course_id' => 28,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '2',
                'orario' => '18:30',
                'course_id' => 29,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '2',
                'orario' => '19:30',
                'course_id' => 30,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '2',
                'orario' => '19:30',
                'course_id' => 32,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '3',
                'orario' => '10:00',
                'course_id' => 8,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '3',
                'orario' => '13:30',
                'course_id' => 33,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '3',
                'orario' => '17:00',
                'course_id' => 26,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '3',
                'orario' => '18:30',
                'course_id' => 22,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '3',
                'orario' => '19:30',
                'course_id' => 25,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '4',
                'orario' => '13:30',
                'course_id' => 34,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '4',
                'orario' => '18:30',
                'course_id' => 36,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '4',
                'orario' => '19:30',
                'course_id' => 31,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '4',
                'orario' => '19:30',
                'course_id' => 32,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '5',
                'orario' => '10:00',
                'course_id' => 8,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '5',
                'orario' => '13:30',
                'course_id' => 31,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '6',
                'orario' => '11:00',
                'course_id' => 35,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'giorno' => '6',
                'orario' => '11:00',
                'course_id' => 37,
                'mezza' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
