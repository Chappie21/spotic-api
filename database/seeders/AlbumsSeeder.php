<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                // Juanes albums
                [
                    "id" => 1,
                    "artists_id" => 1,
                    "name" => "Un Día Normal",
                    "image" => "https://example.com/album1.jpg",
                    "release" => "2002-08-21",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "id" => 2,
                    "artists_id" => 1,
                    "name" => "Mi Sangre",
                    "image" => "https://example.com/album2.jpg",
                    "release" => "2004-09-28",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "id" => 3,
                    "artists_id" => 1,
                    "name" => "La Vida... Es Un Ratico",
                    "image" => "https://example.com/album3.jpg",
                    "release" => "2007-10-23",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                // shakira albums
                [
                    "id" => 4,
                    "artists_id" => 2,
                    "name" => "Fijación Oral, Vol. 1",
                    "image" => "https://example.com/album4.jpg",
                    "release" => "2005-06-06",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "id" => 5,
                    "artists_id" => 2,
                    "name" => "Oral Fixation, Vol. 2",
                    "image" => "https://example.com/album5.jpg",
                    "release" => "2005-11-28",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "id" => 6,
                    "artists_id" => 2,
                    "name" => "El Dorado",
                    "image" => "https://example.com/album6.jpg",
                    "release" => "2017-05-26",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                // beyonce albums
                [
                    "id" => 7,
                    "artists_id" => 3,
                    "name" => "Dangerously in Love",
                    "image" => "https://example.com/album7.jpg",
                    "release" => "2003-06-20",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "id" => 8,
                    "artists_id" => 3,
                    "name" => "Lemonade",
                    "image" => "https://example.com/album8.jpg",
                    "release" => "2016-04-23",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "id" => 9,
                    "artists_id" => 3,
                    "name" => "Black Is King",
                    "image" => "https://example.com/album9.jpg",
                    "release" => "2020-07-31",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                // ed shearan albums
                [
                    "id" => 10,
                    "artists_id" => 4,
                    "name" => "÷ (Divide)",
                    "image" => "https://example.com/album10.jpg",
                    "release" => "2017-03-03",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "id" => 11,
                    "artists_id" => 4,
                    "name" => "x (Multiply)",
                    "image" => "https://example.com/album11.jpg",
                    "release" => "2014-06-20",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "id" => 12,
                    "artists_id" => 4,
                    "name" => "+ (Plus)",
                    "image" => "https://example.com/album12.jpg",
                    "release" => "2011-09-09",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                // Justin beiber albums
                [
                    "id" => 13,
                    "artists_id" => 5,
                    "name" => "Purpose",
                    "image" => "https://example.com/album13.jpg",
                    "release" => "2015-11-13",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "id" => 14,
                    "artists_id" => 5,
                    "name" => "Changes",
                    "image" => "https://example.com/album14.jpg",
                    "release" => "2020-02-14",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "id" => 15,
                    "artists_id" => 5,
                    "name" => "Justice",
                    "image" => "https://example.com/album15.jpg",
                    "release" => "2021-03-19",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                // adele albums
                [
                    "id" => 16,
                    "artists_id" => 6,
                    "name" => "21",
                    "image" => "https://example.com/album16.jpg",
                    "release" => "2011-01-24",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                [
                    "id" => 17,
                    "artists_id" => 6,
                    "name" => "25",
                    "image" => "https://example.com/album17.jpg",
                    "release" => "2015-11-20",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                // rihana almbuns
                [
                    "id" => 18,
                    "artists_id" => 7,
                    "name" => "Anti",
                    "image" => "https://example.com/album16.jpg",
                    "release" => "2016-01-28",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                [
                    "id" => 19,
                    "artists_id" => 7,
                    "name" => "Loud",
                    "image" => "https://example.com/album17.jpg",
                    "release" => "2016-11-12",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                // maluma albums
                [
                    "id" => 20,
                    "artists_id" => 8,
                    "name" => "Don juan",
                    "image" => "https://example.com/album16.jpg",
                    "release" => "2023-08-25",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                [
                    "id" => 21,
                    "artists_id" => 8,
                    "name" => "Magia",
                    "image" => "https://example.com/album17.jpg",
                    "release" => "2012-08-07",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                // dua lipa albums
                [
                    "id" => 22,
                    "artists_id" => 9,
                    "name" => "Future Nostalgia",
                    "image" => "https://example.com/album16.jpg",
                    "release" => "2020-03-27",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                [
                    "id" => 23,
                    "artists_id" => 9,
                    "name" => "Dua Lipa",
                    "image" => "https://example.com/album17.jpg",
                    "release" => "2017-06-02",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                // BTS albums
                [
                    "id" => 24,
                    "artists_id" => 10,
                    "name" => "Wings",
                    "image" => "https://example.com/album16.jpg",
                    "release" => "2016-10-10",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                [
                    "id" => 25,
                    "artists_id" => 10,
                    "name" => "Be",
                    "image" => "https://example.com/album17.jpg",
                    "release" => "2020-11-20",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                // Sia albums
                [
                    "id" => 26,
                    "artists_id" => 11,
                    "name" => "This is acting",
                    "image" => "https://example.com/album16.jpg",
                    "release" => "2016-01-29",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                [
                    "id" => 27,
                    "artists_id" => 11,
                    "name" => "1000 Forms of Fear",
                    "image" => "https://example.com/album17.jpg",
                    "release" => "2017-06-02",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                // Mariana Nalasco albums
                [
                    "id" => 28,
                    "artists_id" => 12,
                    "name" => "Turne Planeta Borboleta",
                    "image" => "https://example.com/album16.jpg",
                    "release" => "2020-07-20",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                [
                    "id" => 29,
                    "artists_id" => 12,
                    "name" => "Mariana Nolasco Sessions",
                    "image" => "https://example.com/album17.jpg",
                    "release" => "2017-02-10",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                // Sebastian Yatra albums
                [
                    "id" => 30,
                    "artists_id" => 13,
                    "name" => "Mantra",
                    "image" => "https://example.com/album16.jpg",
                    "release" => "2018-05-18",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                [
                    "id" => 31,
                    "artists_id" => 13,
                    "name" => "Fantasia",
                    "image" => "https://example.com/album17.jpg",
                    "release" => "2019-04-12",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                // Ariana Grande albums
                [
                    "id" => 32,
                    "artists_id" => 14,
                    "name" => "The Best",
                    "image" => "https://example.com/album16.jpg",
                    "release" => "2017-08-27",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                [
                    "id" => 33,
                    "artists_id" => 14,
                    "name" => "Thank U, Next",
                    "image" => "https://example.com/album17.jpg",
                    "release" => "2019-02-08",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                // Wizkid albums
                [
                    "id" => 34,
                    "artists_id" => 15,
                    "name" => "Made in Lagos",
                    "image" => "https://example.com/album16.jpg",
                    "release" => "2020-10-30",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
                [
                    "id" => 35,
                    "artists_id" => 15,
                    "name" => "More Love, Less Ego",
                    "image" => "https://example.com/album17.jpg",
                    "release" => "2022-11-11",
                     "created_at" => Carbon::now(),
                     "updated_at" => Carbon::now()
                ],
        ];

        // insert data in artists table 
        DB::table('albums')->insert($data);
    }
}
