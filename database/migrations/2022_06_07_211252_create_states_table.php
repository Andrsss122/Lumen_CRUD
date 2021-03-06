<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('names', 150);
            $table->string('lastnames', 200);
            $table->date('birthday');
            $table->integer('city_id')->unsigned()->index();
            $table->foreign('city_id')
            ->references('id')
            ->on('cities')
            ->onupdate('cascade')
            ->ondelete('cascade');
            $table->string('address', 255)->unique();
            $table->string('email', 255)->unique();
            $table->smallInteger('phone');
            $table->integer('status');

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
        Schema::dropIfExists('students');
    }
};
