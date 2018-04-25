<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('geogrophyA');
            $table->integer('geogrophyB');
            $table->integer('geogrophyC');
            $table->integer('geogrophyS');
            $table->integer('geogrophyF');
            $table->integer('citizenshipA');
            $table->integer('citizenshipB');
            $table->integer('citizenshipC');
            $table->integer('citizenshipS');
            $table->integer('citizenshipF');
            $table->integer('entrepreneushipA');
            $table->integer('entrepreneushipB');
            $table->integer('entrepreneushipC');
            $table->integer('entrepreneushipS');
            $table->integer('entrepreneushipF');
            $table->integer('bisinuessA');
            $table->integer('bisinuessB');
            $table->integer('bisinuessC');
            $table->integer('bisinuessS');
            $table->integer('bisinuessF');
            $table->integer('tamilA');
            $table->integer('tamilB');
            $table->integer('tamilC');
            $table->integer('tamilS');
            $table->integer('tamilF');
            $table->integer('musicA');
            $table->integer('musicB');
            $table->integer('musicC');
            $table->integer('musicS');
            $table->integer('musicF');
            $table->integer('artA');
            $table->integer('artB');
            $table->integer('artC');
            $table->integer('artS');
            $table->integer('artF');
            $table->integer('dancingA');
            $table->integer('dancingB');
            $table->integer('dancingC');
            $table->integer('dancingS');
            $table->integer('dancingF');
            $table->integer('sinhalaLitA');
            $table->integer('sinhalaLitB');
            $table->integer('sinhalaLitC');
            $table->integer('sinhalaLitS');
            $table->integer('sinhalaLitF');
            $table->integer('englishLitA');
            $table->integer('englishLitB');
            $table->integer('englishLitC');
            $table->integer('englishLitS');
            $table->integer('englishLitF');
            $table->integer('ICTA');
            $table->integer('ICTB');
            $table->integer('ICTC');
            $table->integer('ICTS');
            $table->integer('ICTF');
            $table->integer('AFTA');
            $table->integer('AFTB');
            $table->integer('AFTC');
            $table->integer('AFTS');
            $table->integer('AFTF');
            $table->integer('DC_A');
            $table->integer('DC_B');
            $table->integer('DC_C');
            $table->integer('DC_S');
            $table->integer('DC_F');
            $table->integer('DM_A');
            $table->integer('DM_B');
            $table->integer('DM_C');
            $table->integer('DM_S');
            $table->integer('DM_F');
            $table->integer('DEE_A');
            $table->integer('DEE_B');
            $table->integer('DEE_C');
            $table->integer('DEE_S');
            $table->integer('DEE_F');
            $table->integer('craftsA');
            $table->integer('craftsB');
            $table->integer('craftsC');
            $table->integer('craftsS');
            $table->integer('craftsF');
            $table->integer('HE_A');
            $table->integer('HE_B');
            $table->integer('HE_C');
            $table->integer('HE_S');
            $table->integer('HE_F');
            $table->integer('HEE_A');
            $table->integer('HEE_B');
            $table->integer('HEE_C');
            $table->integer('HEE_S');
            $table->integer('HEE_F');
            $table->integer('CME_A');
            $table->integer('CME_B');
            $table->integer('CME_C');
            $table->integer('CME_S');
            $table->integer('CME_F');
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
        Schema::dropIfExists('subject_groups');
    }
}
