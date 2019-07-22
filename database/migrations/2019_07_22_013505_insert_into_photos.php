<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertIntoPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
