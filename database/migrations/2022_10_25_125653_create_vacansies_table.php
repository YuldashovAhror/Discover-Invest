<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacansiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacansies', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->text('description_uz');
            $table->text('description_ru');
            $table->text('description_en');
            $table->text('responsihilities_uz')->nullable();
            $table->text('responsihilities_ru')->nullable();
            $table->text('responsihilities_en')->nullable();
            $table->text('requirements_uz')->nullable();
            $table->text('requirements_ru')->nullable();
            $table->text('requirements_en')->nullable();
            $table->text('terms_uz')->nullable();
            $table->text('terms_ru')->nullable();
            $table->text('terms_en')->nullable();
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
        Schema::dropIfExists('vacansies');
    }
}
