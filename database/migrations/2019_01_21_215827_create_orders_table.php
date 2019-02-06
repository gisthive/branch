<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ph_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('discount');
            $table->string('total');
            $table->string('total_recieved');
            $table->string('tax');
            $table->string('customer_id');
            $table->string('customer_ip');
            $table->string('note');
            $table->string('billing_address');
            $table->string('payment_method');
            $table->string('transaction_id');
            $table->string('date_id');
            $table->string('items');
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
        Schema::dropIfExists('orders');
    }
}
