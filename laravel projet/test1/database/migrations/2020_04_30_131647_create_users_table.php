<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('nom_user');
			$table->text('prenom_user');
			$table->date('date_naiss_user');
			$table->text('num_tele_user');
			$table->string('filiere_user', 6)->index('filiere_user');
			$table->text('email_user');
			$table->text('mdps_user');
			$table->text('adresse_user');
			$table->enum('type_user', array('etudiant','professeur','admin'))->nullable();
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
		Schema::drop('users');
	}

}
