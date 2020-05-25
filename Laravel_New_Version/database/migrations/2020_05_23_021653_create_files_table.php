<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->integer('id', true);
			$table->string('id_filiere', 4)->index('id_filiere');
			$table->integer('code_prof')->index('code_prof');
			$table->text('commantaire', 65535);
			$table->integer('id_cour')->nullable()->index('id_cour');
			$table->enum('type_cour', array('cour','tp','td','bibliotheque'))->nullable()->default('cour');
			$table->integer('nbr_telechargement')->nullable()->default(0);
			$table->timestamp('date_ajoute')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('nom_pdf');
			$table->text('pdf_lien');
			$table->text('titre');
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
        Schema::dropIfExists('files');
    }
}
