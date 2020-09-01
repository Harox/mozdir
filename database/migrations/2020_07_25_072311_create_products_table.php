<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->mediumText('description')->nullable();
            $table->float('regular_price')->nullable();
            $table->float('sale_price')->nullable();
            $table->float('stock')->nullable();
            $table->enum('stock_status', ['in', 'out'])->nullable();
            $table->float('Weight')->nullable();
            $table->float('length')->nullable();
            $table->float('width')->nullable();
            $table->float('height')->nullable();
            $table->string('purchase_notes')->nullable();
            $table->float('min_order')->nullable();
            $table->string('keyword')->nullable();
            $table->string('image', 80)->nullable();
            $table->integer('admin_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
