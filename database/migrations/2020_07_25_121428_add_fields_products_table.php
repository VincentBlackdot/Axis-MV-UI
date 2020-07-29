<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsProductsTable extends Migration
{

    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->char('name', 100);
            $table->longText('description');
             $table->char('image');
              $table->float('price', 8, 2);
               $table->char('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn('name');
             $table->dropColumn('description');
              $table->dropColumn('image');
             $table->dropColumn('price');
             $table->dropColumn('type');


        });
    }
}
