<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            //`userId`, `institution`, `program`, `fieldOfStudy`, `startYear`, `endYear`, `description` 
            $table->bigIncrements('id');
            $table->string('userId');
            $table->string('institution');
            $table->string('program');
            $table->string('fieldOfStudy');
            $table->string('startYear');
            $table->string('endYear');
            $table->string('description');
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
        Schema::dropIfExists('_education');
    }
}
