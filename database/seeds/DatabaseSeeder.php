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


        $photoLink7 = "https://live.staticflickr.com/65535/48340809192_25c45aec3a_c.jpg";
        $photoLink8 = "https://live.staticflickr.com/65535/48340810127_cba9c814b3_c.jpg";

        $photoLink9 = "https://live.staticflickr.com/65535/48340811152_3f52f373a3_c.jpg";

        $photoLink10 = "https://live.staticflickr.com/65535/48340668951_890ba7c90b_c.jpg";

        $photoLink11 = "https://live.staticflickr.com/65535/48340811372_5a8d2256c9_c.jpg";

        $photoLink12 = "https://live.staticflickr.com/65535/48340811392_c0b4f04ed4_c.jpg";

        $photoLink13 = "https://live.staticflickr.com/65535/48340669241_61cfba38f7_c.jpg";

        $photoLink14 = "https://live.staticflickr.com/65535/48340811902_62a7d36bfc_c.jpg";

        $photoLink15 = "https://live.staticflickr.com/65535/48340811962_037aa06456_c.jpg";

    
    
        
        
        
        
        
        
        
        

        

        

        

        //
        $data = array(
            array("id" => null, "title" => null, "src" => $photoLink1, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink2, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink3, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink4, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink5, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink6, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink7, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink8, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink9, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink10, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink11, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink12, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink13, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink14, "created_at" => null, "updated_at" => null),
            array("id" => null, "title" => null, "src" => $photoLink15, "created_at" => null, "updated_at" => null)
        );


        // Insert some stuff
        DB::table('photos')->insert($data);
    }
}
