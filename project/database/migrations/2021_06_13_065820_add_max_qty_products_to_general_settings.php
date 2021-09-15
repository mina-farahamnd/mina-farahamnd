<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaxQtyProductsToGeneralSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('generalsettings', function (Blueprint $table) {
            $table->integer('max_slider')->nullable();
            $table->integer('max_recommend')->nullable();
            $table->integer('max_discount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('generalsettings', function (Blueprint $table) {
            //
            $table->dropColumn('max_slider');
            $table->dropColumn('max_recommend');
            $table->dropColumn('max_discount');
        });
    }
}
