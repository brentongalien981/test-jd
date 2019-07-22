<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //
        $photoLink1 = "https://live.staticflickr.com/65535/48340808017_52be9c008b_c.jpg";
        $photoLink2 = "https://www.youtube.com/embed/tvTRZJ-4EyI";



        //
        $data = array(
            array("id" => null, "title" => null, "src" => $photoLink1, "created_at" => null, "updated_at" => null)
        );


        // Insert some stuff
        DB::table('photos')->insert($data);
    }
}
