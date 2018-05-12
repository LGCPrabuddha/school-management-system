<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClass10AsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class10_as', function (Blueprint $table) {
          $table->date('year');
          $table->string('student');
          $table->string('section');
          $table->float('religion1stTerm');
          $table->float('sinhala1stTerm');
          $table->float('maths1stTerm');
          $table->float('seince1stTerm');
          $table->float('english1stTerm');
          $table->float('history1stTerm');
          $table->float('grouop1Sub1stTerm');
          $table->float('grouop2Sub1stTerm');
          $table->float('grouop3Sub1stTerm');
          $table->float('totelMarks1stTerm');
          $table->float('avg1stTerm');


          $table->float('religion2ndTerm');
          $table->float('sinhala2ndTerm');
          $table->float('maths2ndTerm');
          $table->float('seince2ndTerm');
          $table->float('english2ndTerm');
          $table->float('history2ndTerm');
          $table->float('grouop1Sub2ndTerm');
          $table->float('grouop2Sub2ndTerm');
          $table->float('grouop3Sub2ndTerm');
          $table->float('totelMarks2ndTerm');
          $table->float('avg2ndTerm');

          $table->float('religion3rdTerm');
          $table->float('sinhala3rdTerm');
          $table->float('maths3rdTerm');
          $table->float('seince3rdTerm');
          $table->float('english3rdTerm');
          $table->float('history3rdTerm');
          $table->float('grouop1Sub3rdTerm');
          $table->float('grouop2Sub3rdTerm');
          $table->float('grouop3Sub3rdTerm');
          $table->float('totelMarks3rdTerm');
          $table->float('avg3rdTerm');

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
        Schema::dropIfExists('class10_as');
    }
}
