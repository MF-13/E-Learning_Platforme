<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->integer('id_quiz', true);
			$table->text('nom_quiz');
			$table->integer('id_prof')->index('id_prof');
			$table->string('id_filiere', 4)->index('id_filiere');
			$table->dateTime('dernier_delai')->nullable();
			$table->timestamp('date_pub')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('quizzes');
    }
}
