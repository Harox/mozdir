<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('description')->nullable();
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('categories');
            $table->string('post_code')->nullable();
            $table->enum('verified', ['yes', 'no'])->default('no')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
