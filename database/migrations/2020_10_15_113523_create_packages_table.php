<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('description')->nullable();
            $table->float('price')->nullable()->default(0.00);
            $table->integer('duration');
            $table->enum('duration_type', ['day', 'week','month', 'year'])->default('month')->nullable();
            $table->string('benefits')->nullable();
            $table->string('image', 80)->nullable();
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
        Schema::dropIfExists('packages');
    }
}
