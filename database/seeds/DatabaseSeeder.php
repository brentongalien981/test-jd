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
        $photoLink2 = "https://live.staticflickr.com/65535/48340808097_819ae81aba_c.jpg";
        $photoLink3 = "https://live.staticflickr.com/65535/48340665891_a529ceb440_c.jpg";
        $photoLink4 = "https://live.staticflickr.com/65535/48340666086_77ac53d23f_c.jpg";

        $photoLink5 = "https://live.staticflickr.com/65535/48340808647_b339c50dc5_c.jpg";
        $photoLink6 = "https://live.staticflickr.com/65535/48340667191_f52431b694_c.jpg";

        
        
        

        

        

        //
        $data = array(
            array("id" => null, "title" => null, "src" => $photoLink1, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink2, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink3, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink4, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink5, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink6, "created_at" => null, "updated_at" => null)
        );


        // Insert some stuff
        DB::table('photos')->insert($data);
    }
}
