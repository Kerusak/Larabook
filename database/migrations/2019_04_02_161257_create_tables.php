<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     * php artisan migrate
     * php artisan migrate::rollback
     * php artisan migrate::refresh
     *
     */
    public function up()
    {
        Schema::create('Topics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('topicname', 100)->unique();
            $table->timestamps();
        });
        Schema::create('Blocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('topic_id')->unsigned();
            $table->foreign('topic_id')->references('id')->on('Topics')->onDelete('cascade');
            $table->string('title', 100)->unique();
            $table->longText('content')->nullable();
            $table->string('image_path', 255)->nullable();
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
        Schema::dropIfExists('Topics');
        Schema::dropIfExists('Blocks');
    }
}
