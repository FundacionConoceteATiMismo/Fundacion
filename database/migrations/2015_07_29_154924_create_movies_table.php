<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movies', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name');
			$table->string('description');

			//crear atributi de llave foranea
			$table->integer('fk_id_geneder')->unsigned();
			//crear la relacion
			$table->foreign('fk_id_geneder')
			->references('id')
			->on('geneders')
			->onDelete('cascade');
			
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
		Schema::drop('movies');
	}

}
