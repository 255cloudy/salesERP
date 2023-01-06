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
        Schema::create('order_entry', function (Blueprint $table) {
            $table->id();
            $table->string("product_name");
            $table->bigInteger("product_id");
            $table->foreign("product_id")
                ->references("id")
                ->on("stocks");
            $table->integer("qty");
            $table->double("retail_price");
            $table->double("sale_price");
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
        Schema::dropIfExists('order_entry');
    }
};
