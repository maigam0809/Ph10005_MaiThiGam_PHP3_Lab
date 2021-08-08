<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePostTable extends Migration
{
    public function up(){
        Schema::table('users', function($table) {
            $table->string('address');
            $table->string('image');
            $table->integer('gender')->default(1);
            $table->integer('role')->default(1);
        });
    }

    public function down(){
        Schema::table('users', function($table) {
            $table->dropColumn('image');
            $table->dropColumn('address');
            $table->dropColumn('gender');
            $table->dropColumn('role');
        });
    }
}
