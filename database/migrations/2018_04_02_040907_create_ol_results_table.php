<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOlResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ol_results', function (Blueprint $table) {
            $table->string('admNo');
            $table->string('index');
            $table->string('year');
            $table->string('maths');
            $table->string('seince');
            $table->string('religion');
            $table->string('sinhala');
            $table->string('english');
            $table->string('history');
            $table->string('subjectGroup1');
            $table->string('subjectGroup2');
            $table->string('subjectGroup3');
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
        Schema::dropIfExists('ol_results');
    }
}
