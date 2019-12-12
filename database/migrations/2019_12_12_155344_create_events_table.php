<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('date');
            $table->string('nom');
            $table->integer('late')->default('0'); /* GPS */
            $table->integer('long')->default('0'); /* GPS */
            $table->text('nom_rue');
            $table->text('complement');
            $table->string('ville');
            $table->integer('codepostal');
            $table->string('theme')->default('nb');
            $table->text('descriptif');
            $table->integer('effectif_max')->default('0');
            $table->integer('effectif_min')->default('0');
            $table->integer('user_id')->default('0')->unsigned();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
