<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentcvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('contentcvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link')->default('https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAsxAAAAJGJmMGUwNWEyLWQ2ZmEtNDg5Yy1hZDQ0LWY1MmM0MGQ3MmY3Yw.jpg');
            $table->string('advanced')->default('PHP,JavaScript,HTML,CSS');
            $table->string('basic')->default('C,Python,MySQL');
            $table->string('addition')->default('Git,redmine, MarkDown');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('contentcvs');
    }
}
