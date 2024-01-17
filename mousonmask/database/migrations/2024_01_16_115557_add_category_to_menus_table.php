<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToMenusTable extends Migration
{
    public function up()
    {
        // Drop the existing category column if it exists
        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn('category');
        });

        // Add the category column
        Schema::table('menus', function (Blueprint $table) {
            $table->string('category');
        });
    }

    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
}
