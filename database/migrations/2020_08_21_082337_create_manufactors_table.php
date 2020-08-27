<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufactors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('post_code')->nullable();
            $table->enum('verified', ['yes', 'no'])->default('no')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('manufactors');
    }
}
