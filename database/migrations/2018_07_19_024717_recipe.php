<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recipe extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipe', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('prepTime');
			$table->integer('cookTime');
			$table->string('description');
			$table->string('source');
			$table->string('url');
			$table->string('directions');
			$table->enum('difficulty', ['EASY', 'MODERATE', 'HARD']);
			$table->string('image');
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
		Schema::dropIfExists('recipe');
	}
}
