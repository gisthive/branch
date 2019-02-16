<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ph_customers', function (Blueprint $table) {
            $table->string('id');
            $table->string('role')->nullable->default(null);
            $table->string('image')->nullable->default(null);;
            $table->string('address_1');
            $table->string('address_2')->nullable->default(null);;
            $table->string('work')->nullable->default(null);;
            $table->string('city');
            $table->string('state');
            $table->string('postcode');
            $table->string('country');
            $table->string('phone');
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
        Schema::dropIfExists('customers');
    }
}
