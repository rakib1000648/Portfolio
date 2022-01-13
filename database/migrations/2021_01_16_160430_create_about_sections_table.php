<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->text('introduction')->nullable();
            $table->string('title')->nullable();
            $table->text('brief_description')->nullable();
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('website')->nullable();
            $table->string('degree')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('freelance')->nullable();
            $table->text('conclusion')->nullable();
            $table->string('photo')->nullable();
            $table->string('user_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_sections');
    }
}
