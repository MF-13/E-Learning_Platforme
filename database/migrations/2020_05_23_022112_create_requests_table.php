<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->integer('id', true);
			$table->string('nom', 25);
			$table->string('prenom', 25);
			$table->date('date_naiss');
			$table->string('filiere', 4)->index('filiere');
			$table->integer('num_tele');
			$table->string('email', 30);
			$table->text('password');
			$table->enum('type_user', array('etudiant','professeur'));
			$table->enum('etat', array('-1','0','1'));
			$table->text('adresse');
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
        Schema::dropIfExists('requests');
    }
}
