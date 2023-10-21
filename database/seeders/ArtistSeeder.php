<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                "id" => 1,
                "first_name" => "Juan",
                "last_name" => "Aristizábal",
                "artist_name" => "Juanes",
                "age" => 51,
                "country" => "Colombia",
                "image" => "https://ichef.bbci.co.uk/news/640/cpsprodpb/f728/live/fcc2d9f0-47f2-11ee-ac6b-f575f1fa979e.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 2,
                "first_name" => "Shakira",
                "last_namee" => "Mebarak",
                "artist_name" => "Shakira",
                "age" => 44,
                "country" => "Colombia",
                "image" => "https://aws-modapedia.vogue.es/prod/designs/v1/assets/640x853/2107.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 3,
                "first_name" => "Beyoncé",
                "last_name" => "Knowles",
                "artist_name" => "Beyoncé",
                "age" => 40,
                "country" => "United States",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/7/7d/Beyonc%C3%A9_-_Tottenham_Hotspur_Stadium_-_1st_June_2023_%2871_of_118%29_%2852945301662%29_%28face_cropped%29.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 4,
                "first_name" => "Ed",
                "last_name" => "Sheeran",
                "artist_name" => "Ed Sheeran",
                "age" => 30,
                "country" => "United Kingdom",
                "image" => "https://static.independent.co.uk/s3fs-public/thumbnails/image/2014/12/05/18/Ed-Sheeran.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 5,
                "first_name" => "Justin",
                "last_name" => "Bieber",
                "artist_name" => "Justin Bieber",
                "age" => 27,
                "country" => "Canada",
                "image" => "https://www.latercera.com/resizer/y1qgfyDI1Ilq6SgEKh3PyQjXm5M=/900x600/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/RNBN3FGVBVEPVBOM63DLXBSW2Q.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 6,
                "first_name" => "Adele",
                "last_name" => "Adkins",
                "artist_name" => "Adele",
                "age" => 33,
                "country" => "United Kingdom",
                "image" => "https://media.vogue.mx/photos/62752654e77a9f1126753b96/2:3/w_2560%2Cc_limit/adele-GettyImages-1369535083.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 7,
                "first_name" => "Rihanna",
                "last_name" => "Fenty",
                "artist_name" => "Rihanna",
                "age" => 33,
                "country" => "Barbados",
                "image" => "https://hips.hearstapps.com/hmg-prod/images/rihanna-1666812930.jpg?crop=0.876xw:0.627xh;0.0457xw,0.0199xh&resize=1200:*",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 8,
                "first_name" => "Maluma",
                "last_name" => "Baby",
                "artist_name" => "Maluma",
                "age" => 27,
                "country" => "Colombia",
                "image" => "https://media.vogue.mx/photos/645054948ac66e655c9eafa5/1:1/w_2000,h_2000,c_limit/maluma-en-met-gala-2023.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 9,
                "first_name" => "Dua",
                "last_name" => "Lipa",
                "artist_name" => "Dua Lipa",
                "age" => 26,
                "country" => "United Kingdom",
                "image" => "https://lumiere-a.akamaihd.net/v1/images/dua_lipa_portada_5_bf1628a4.jpeg?region=443,0,1100,1100",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 10,
                "first_name" => "BTS",
                "last_name" => "",
                "artist_name" => "BTS",
                "age" => 25,
                "country" => "South Korea",
                "image" => "https://6.soompi.io/wp-content/uploads/image/20230609044433_20230609042256_bts-2.jpeg?s=900x600&e=t",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 11,
                "first_name" => "Sia",
                "last_name" => "Furler",
                "artist_name" => "Sia",
                "age" => 45,
                "country" => "Australia",
                "image" => "https://static.wikia.nocookie.net/zootopia/images/d/de/Sia-Furler-31.jpg/revision/latest?cb=20150830155242",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 12,
                "first_name" => "Mariana",
                "last_name" => "Nolasco",
                "artist_name" => "Mariana Nolasco",
                "age" => 24,
                "country" => "Brazil",
                "image" => "https://static.wixstatic.com/media/3d31c1_6ffdd24c05fd4f339abb12cc11e8ede6~mv2.jpg/v1/fill/w_454,h_442,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/02_JPG.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 13,
                "first_name" => "Sebastian",
                "last_name" => "Yatra",
                "artist_name" => "Sebastian Yatra",
                "age" => 27,
                "country" => "Colombia",
                "image" => "https://yt3.googleusercontent.com/nazlFNXaBOFAX_7Nv4N9AJNeJy7m-0A7DUNz8sUDTcmiwkSqKFGRyz7i3N6n2Ixrt_M0kuTjkxA=s900-c-k-c0x00ffffff-no-rj",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 14,
                "first_name" => "Ariana",
                "last_name" => "Grande",
                "artist_name" => "Ariana Grande",
                "age" => 28,
                "country" => "United States",
                "image" => "https://media.vogue.mx/photos/5e9f0aef8966aa000859aac6/4:3/w_2264,h_1698,c_limit/como-hacer-el-peinado-de-ariana-grande.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "id" => 15,
                "first_name" => "Wizkid",
                "last_name" => "",
                "artist_name" => "Wizkid",
                "age" => 31,
                "country" => "Nigeria",
                "image" => "https://media.vogue.co.uk/photos/6041f07c107e7ce55db43e7d/2:3/w_2560%2Cc_limit/wiz.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]
        ];

        // insert data in artists table 
        DB::table('artists')->insert($data);
    }
}
