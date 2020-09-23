<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_header', function (Blueprint $table) {
            $table->id();
            $table->integer('restoid');
            $table->integer('branchid');
            $table->timestamp('fecha_operacion', 0);
            $table->decimal('gran_total', 8, 2);
            $table->integer('status_orderid');
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
        Schema::dropIfExists('orders_header');
    }
}
