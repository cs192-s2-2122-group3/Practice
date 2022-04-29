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
        Schema::create('user_course', function (Blueprint $table) {
            $table  ->integer('user_id')->unsigned();
            $table  ->integer('course_id')->unsigned();
            $table  ->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table  ->foreign('course_id')
                    ->references('id')
                    ->on('courses')
                    ->onDelete('cascade');
            $table  ->boolean('is_handler')->default(false);
            $table  ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_courses');
    }
};
