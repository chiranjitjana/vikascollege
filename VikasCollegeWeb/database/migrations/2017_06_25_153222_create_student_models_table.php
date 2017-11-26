<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_models', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('college_id');
        	$table->string('stdname');
        	$table->string('stdstream');
        	$table->string('stdclass');
        	$table->date('stddob');
        	$table->string('stdemail');
        	$table->string('stdmobile');
        	$table->mediumText('stdprofile');
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
        Schema::dropIfExists('student_models');
    }
}
