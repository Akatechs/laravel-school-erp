<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exams', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('exam_group_id');
            $table->integer('subject_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('maximum_marks');
            $table->integer('minimum_marks');
            $table->integer('grading_level_id');
            $table->integer('weightage')->default('0');
            $table->integer('event_id');
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
		Schema::drop('exams');
	}

}
