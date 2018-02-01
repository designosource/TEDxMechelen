<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organisator');
            $table->string('naam');
            $table->string('voornaam');
            $table->string('straat');
            $table->string('postcode');
            $table->string('gemeente');
            $table->string('email')->nullable();
            $table->string('telefoon')->nullable();
            $table->boolean('terms_accepted');
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
        Schema::dropIfExists('volunteers');
    }
}
