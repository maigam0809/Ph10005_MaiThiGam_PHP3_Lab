<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddForeignkeyStudentsTable extends Migration
{
    
    public function up()
    {
        Schema::table('students', function ($table) {
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id ')->references('id')->on('subjects');
        });
    }

    
    public function down()
    {
        Schema::table('students', function ($table) {
            $table->dropForeign('subject_id');
        });
    }
}
