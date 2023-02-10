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
                $table->dropForeign('orders_menu_id_foreign');
                $table->dropColumn('menu_id');
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
            $table->unsignedInteger('menu_id');

            $table->foreign('menu_id')
                  ->references('id')
                  ->on('menus')
                  ->onDelete('cascade');
        });
    }
};
