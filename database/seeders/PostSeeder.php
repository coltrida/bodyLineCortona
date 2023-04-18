<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::insert([
            [
                'titolo' => 'Addio Cellulite',
                'foto' => '1.jpg',
                'evidenza' => null,
                'created_at' => Carbon::make('01-03-2021'),
                'updated_at' => Carbon::make('01-03-2021'),
            ],
            [
                'titolo' => 'Benessere Posturale',
                'foto' => '2.jpg',
                'evidenza' => '1',
                'created_at' => Carbon::make('01-04-2021'),
                'updated_at' => Carbon::make('01-04-2021'),
            ],
            [
                'titolo' => 'Giornata Otium',
                'foto' => '3.jpg',
                'evidenza' => null,
                'created_at' => Carbon::make('20-08-2020'),
                'updated_at' => Carbon::make('20-08-2020'),
            ],
            [
                'titolo' => 'Alimentazione',
                'foto' => '4.jpg',
                'evidenza' => null,
                'created_at' => Carbon::make('19-05-2021'),
                'updated_at' => Carbon::make('19-05-2021'),
            ],
            [
                'titolo' => 'Allenamenti in acqua',
                'foto' => '5.jpg',
                'evidenza' => null,
                'created_at' => Carbon::make('20-05-2021'),
                'updated_at' => Carbon::make('20-05-2021'),
            ],
            [
                'titolo' => 'Power Balance',
                'foto' => '6.jpg',
                'evidenza' => null,
                'created_at' => Carbon::make('15-08-2020'),
                'updated_at' => Carbon::make('15-08-2020'),
            ],
            [
                'titolo' => 'Crossfit',
                'foto' => '7.jpg',
                'evidenza' => '1',
                'created_at' => Carbon::make('28-08-2020'),
                'updated_at' => Carbon::make('28-08-2020'),
            ],
            [
                'titolo' => 'Personal Training Room',
                'foto' => '8.jpg',
                'evidenza' => null,
                'created_at' => Carbon::make('15-09-2020'),
                'updated_at' => Carbon::make('15-09-2020'),
            ],
            [
                'titolo' => 'B Workout',
                'foto' => '9.jpg',
                'evidenza' => '1',
                'created_at' => Carbon::make('15-02-2020'),
                'updated_at' => Carbon::make('15-02-2020'),
            ],
            [
                'titolo' => 'Calisthenics',
                'foto' => '10.jpg',
                'evidenza' => null,
                'created_at' => Carbon::make('01-09-2020'),
                'updated_at' => Carbon::make('01-09-2020'),
            ],
            [
                'titolo' => 'Hiit Core',
                'foto' => '11.jpg',
                'evidenza' => null,
                'created_at' => Carbon::make('01-07-2020'),
                'updated_at' => Carbon::make('01-07-2020'),
            ],
            [
                'titolo' => 'KMRED',
                'foto' => '12.jpg',
                'evidenza' => null,
                'created_at' => Carbon::make('01-08-2019'),
                'updated_at' => Carbon::make('01-08-2019'),
            ],
        ]);
    }
}
