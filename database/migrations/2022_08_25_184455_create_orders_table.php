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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('order_firstname');
            $table->string('order_lastname');
            $table->string('order_adresse');
            $table->string('order_email');
            $table->string('order_phone');
            $table->foreignId('menu_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('delivery_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('portion_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('order_total');
            
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
};
