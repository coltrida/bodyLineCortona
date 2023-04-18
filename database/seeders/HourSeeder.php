<?php

namespace Database\Seeders;

use App\Models\Hour;
use Illuminate\Database\Seeder;

class HourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hour::insert([
            [
                'giorno' => 1,
                'oraMattinoInizio' => '09:00',
                'oraMattinoFine' => '12:30',
                'oraPomeriggioInizio' => '14:30',
                'oraPomeriggioFine' => '21:00'
            ],
            [
                'giorno' => 2,
                'oraMattinoInizio' => '09:00',
                'oraMattinoFine' => '12:30',
                'oraPomeriggioInizio' => '14:30',
                'oraPomeriggioFine' => '21:00'
            ],
            [
                'giorno' => 3,
                'oraMattinoInizio' => '09:00',
                'oraMattinoFine' => '12:30',
                'oraPomeriggioInizio' => '14:30',
                'oraPomeriggioFine' => '21:00'
            ],
            [
                'giorno' => 4,
                'oraMattinoInizio' => '09:00',
                'oraMattinoFine' => '21:00',
                'oraPomeriggioInizio' => null,
                'oraPomeriggioFine' => null
            ],
            [
                'giorno' => 5,
                'oraMattinoInizio' => '09:00',
                'oraMattinoFine' => '21:00',
                'oraPomeriggioInizio' => null,
                'oraPomeriggioFine' => null
            ],
            [
                'giorno' => 6,
                'oraMattinoInizio' => '09:00',
                'oraMattinoFine' => '12:30',
                'oraPomeriggioInizio' => null,
                'oraPomeriggioFine' => null
            ],
        ]);
    }
}
