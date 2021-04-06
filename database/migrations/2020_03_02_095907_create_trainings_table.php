<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainings', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('contact_id')->unsigned();
			$table->float('priceAbo')->unsigned();
			$table->string('city')->nullable();
			$table->dateTime('ordered_at');
			$table->timestamps();

			$table->foreign('contact_id')->references('id')->on('contacts');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('trainings');
	}
}
