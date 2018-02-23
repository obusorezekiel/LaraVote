<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('president');
            $table->string('vp_acad');
            $table->string('vp_admin');
            $table->string('gen_sec');
            $table->string('ass_sec');
            $table->string('fin_sec');
            $table->string('welfare');
            $table->string('prayer');
            $table->string('itt');
            $table->string('ret');
            $table->string('vybes');
            $table->string('mnt');
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
        Schema::dropIfExists('votes');
    }
}
