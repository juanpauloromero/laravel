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
        Schema::table('orders', function (Blueprint $table) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropForeign('orders_dish_id_foreign');
                $table->dropColumn('dish_id');
        });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            Schema::table('orders', function (Blueprint $table) {
                $table->unsignedInteger('dish_id');
    
                $table->foreign('dish_id')
                      ->references('id')
                      ->on('dishes')
                      ->onDelete('cascade');
            });
        });
    }
};
