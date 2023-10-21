<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Juanes Songs
            [
                "id" => 1,
                "name" => "A Dios le Pido",
                "lyrics" => "Letra de la canción A Dios le Pido...",
                "duration" => 180,
                "image" => "https://example.com/song1.jpg",
                "release" => "2002-08-21",
                "albums_id" => 1,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 2,
                "name" => "La Camisa Negra",
                "lyrics" => "Letra de la canción La Camisa Negra...",
                "duration" => 200,
                "image" => "https://example.com/song2.jpg",
                "release" => "2004-09-28",
                "albums_id" => 2,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Shakira Songs
            [
                "id" => 3,
                "name" => "Hips Don't Lie",
                "lyrics" => "Letra de la canción Hips Don't Lie...",
                "duration" => 220,
                "image" => "https://example.com/song3.jpg",
                "release" => "2005-06-06",
                "albums_id" => 4,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 4,
                "name" => "Chantaje",
                "lyrics" => "Letra de la canción Chantaje...",
                "duration" => 195,
                "image" => "https://example.com/song4.jpg",
                "release" => "2017-05-26",
                "albums_id" => 6,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Beyoncé Songs
            [
                "id" => 5,
                "name" => "Crazy In Love",
                "lyrics" => "Letra de la canción Crazy In Love...",
                "duration" => 210,
                "image" => "https://example.com/song5.jpg",
                "release" => "2003-06-20",
                "albums_id" => 7,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 6,
                "name" => "Formation",
                "lyrics" => "Letra de la canción Formation...",
                "duration" => 190,
                "image" => "https://example.com/song6.jpg",
                "release" => "2016-04-23",
                "albums_id" => 8,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Ed Sheeran Songs
            [
                "id" => 7,
                "name" => "Shape of You",
                "lyrics" => "Letra de la canción Shape of You...",
                "duration" => 235,
                "image" => "https://example.com/song7.jpg",
                "release" => "2017-03-03",
                "albums_id" => 10,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 8,
                "name" => "Thinking Out Loud",
                "lyrics" => "Letra de la canción Thinking Out Loud...",
                "duration" => 210,
                "image" => "https://example.com/song8.jpg",
                "release" => "2014-06-20",
                "albums_id" => 11,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Justin Bieber Songs
            [
                "id" => 9,
                "name" => "Sorry",
                "lyrics" => "Letra de la canción Sorry...",
                "duration" => 200,
                "image" => "https://example.com/song9.jpg",
                "release" => "2015-11-13",
                "albums_id" => 13,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 10,
                "name" => "Yummy",
                "lyrics" => "Letra de la canción Yummy...",
                "duration" => 185,
                "image" => "https://example.com/song10.jpg",
                "release" => "2020-02-14",
                "albums_id" => 14,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Adele Songs
            [
                "id" => 11,
                "name" => "Hello",
                "lyrics" => "Letra de la canción Hello...",
                "duration" => 230,
                "image" => "https://example.com/song11.jpg",
                "release" => "2015-10-23",
                "albums_id" => 16,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 12,
                "name" => "Someone Like You",
                "lyrics" => "Letra de la canción Someone Like You...",
                "duration" => 215,
                "image" => "https://example.com/song12.jpg",
                "release" => "2011-09-09",
                "albums_id" => 17,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Rihanna Songs
            [
                "id" => 13,
                "name" => "Umbrella",
                "lyrics" => "Letra de la canción Umbrella...",
                "duration" => 215,
                "image" => "https://example.com/song13.jpg",
                "release" => "2007-03-29",
                "albums_id" => 18,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 14,
                "name" => "We Found Love",
                "lyrics" => "Letra de la canción We Found Love...",
                "duration" => 210,
                "image" => "https://example.com/song14.jpg",
                "release" => "2011-09-22",
                "albums_id" => 19,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Maluma Songs
            [
                "id" => 15,
                "name" => "Hawái",
                "lyrics" => "Letra de la canción Hawái...",
                "duration" => 195,
                "image" => "https://example.com/song15.jpg",
                "release" => "2020-07-29",
                "albums_id" => 20,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 16,
                "name" => "Felices los 4",
                "lyrics" => "Letra de la canción Felices los 4...",
                "duration" => 190,
                "image" => "https://example.com/song16.jpg",
                "release" => "2017-04-21",
                "albums_id" => 21,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Dua Lipa Songs
            [
                "id" => 17,
                "name" => "Levitating",
                "lyrics" => "Letra de la canción Levitating...",
                "duration" => 208,
                "image" => "https://example.com/song17.jpg",
                "release" => "2020-10-02",
                "albums_id" => 22,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 18,
                "name" => "New Rules",
                "lyrics" => "Letra de la canción New Rules...",
                "duration" => 195,
                "image" => "https://example.com/song18.jpg",
                "release" => "2017-07-21",
                "albums_id" => 23,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // BTS Songs
            [
                "id" => 19,
                "name" => "Dope",
                "lyrics" => "Letra de la canción Dope...",
                "duration" => 205,
                "image" => "https://example.com/song19.jpg",
                "release" => "2015-06-24",
                "albums_id" => 24,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 20,
                "name" => "Dynamite",
                "lyrics" => "Letra de la canción Dynamite...",
                "duration" => 210,
                "image" => "https://example.com/song20.jpg",
                "release" => "2020-08-21",
                "albums_id" => 25,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Sia Songs
            [
                "id" => 21,
                "name" => "Cheap Thrills",
                "lyrics" => "Letra de la canción Cheap Thrills...",
                "duration" => 198,
                "image" => "https://example.com/song21.jpg",
                "release" => "2016-02-11",
                "albums_id" => 26,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 22,
                "name" => "Chandelier",
                "lyrics" => "Letra de la canción Chandelier...",
                "duration" => 215,
                "image" => "https://example.com/song22.jpg",
                "release" => "2014-03-17",
                "albums_id" => 27,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Mariana Nolasco Songs
            [
                "id" => 23,
                "name" => "Poeira da Lua",
                "lyrics" => "Letra da música Poeira da Lua...",
                "duration" => 180,
                "image" => "https://example.com/song23.jpg",
                "release" => "2021-06-25",
                "albums_id" => 28,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 24,
                "name" => "Caminhão de Areia",
                "lyrics" => "Letra da música Caminhão de Areia...",
                "duration" => 192,
                "image" => "https://example.com/song24.jpg",
                "release" => "2018-05-04",
                "albums_id" => 29,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Sebastian Yatra Songs
            [
                "id" => 25,
                "name" => "No Hay Nadie Más",
                "lyrics" => "Letra de la canción No Hay Nadie Más...",
                "duration" => 194,
                "image" => "https://example.com/song25.jpg",
                "release" => "2017-04-21",
                "albums_id" => 30,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 26,
                "name" => "Para Olvidar",
                "lyrics" => "Letra de la canción Para Olvidar...",
                "duration" => 198,
                "image" => "https://example.com/song26.jpg",
                "release" => "2018-06-08",
                "albums_id" => 31,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Ariana Grande Songs
            [
                "id" => 27,
                "name" => "Into You",
                "lyrics" => "Letra de la canción Into You...",
                "duration" => 220,
                "image" => "https://example.com/song27.jpg",
                "release" => "2016-05-06",
                "albums_id" => 32,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 28,
                "name" => "7 Rings",
                "lyrics" => "Letra de la canción 7 Rings...",
                "duration" => 175,
                "image" => "https://example.com/song28.jpg",
                "release" => "2019-01-18",
                "albums_id" => 33,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            // Wizkid Songs
            [
                "id" => 29,
                "name" => "Essence",
                "lyrics" => "Lyrics for Essence...",
                "duration" => 218,
                "image" => "https://example.com/song29.jpg",
                "release" => "2020-10-30",
                "albums_id" => 34,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 30,
                "name" => "No Stress",
                "lyrics" => "Lyrics for No Stress...",
                "duration" => 240,
                "image" => "https://example.com/song30.jpg",
                "release" => "2020-09-16",
                "albums_id" => 35,
                "genres_id" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]
        ];

        // insert data in songs table 
        DB::table('songs')->insert($data);
    }
}
