<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->integer('id_msg', true);
			$table->integer('emetteur_id');
			$table->text('emetteur_nom');
			$table->text('emetteur_email');
			$table->integer('emetteur_telephone');
			$table->enum('emetteur_type', array('admin','professeur','etudiant','visiteur'))->nullable();
			$table->text('message');
			$table->enum('etat', array('0','1'))->nullable()->default('0');
			$table->timestamp('date_env')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('recepteur_id');
			$table->text('recepteur_email');
			$table->enum('recepteur_type', array('admin','professeur','etudiant','visiteur'))->nullable();
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
		Schema::drop('messages');
	}

}
