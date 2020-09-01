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
            $table->float('regular_price');
            $table->float('sale_price');
            $table->float('stock');
            $table->enum('stock_status', ['in', 'out'])->nullable();
            $table->float('Weight');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->string('purchase_notes')->nullable();
            $table->float('min_order');
            $table->string('keyword')->nullable();
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
        Schema::dropIfExists('products');
    }
}
