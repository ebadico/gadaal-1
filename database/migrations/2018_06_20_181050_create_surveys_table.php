<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('project_id');
            $table->string('body');
            $table->enum('infrastrecture', 'true','false')->default('false');
            $table->timestamps();
        });

        Schema::create('question_survey', function (Blueprint $table) {
            
            $table->integer('question_id');
            $table->integer('survey_id');
            $table->primary(['question_id', 'survey_id']);
        });

        Schema::create('category_survey', function (Blueprint $table) {
            
            $table->integer('category_id');
            $table->integer('survey_id');
            $table->primary(['category_id', 'survey_id']);


        });


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
        Schema::dropIfExists('question_survey');
        Schema::dropIfExists('category_survey');
    }
}
