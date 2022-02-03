<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class ModifyAdmissionsTable01
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('admissions', function (Blueprint $table)
        {
            $table->string('adm_no');

            $table->string('previous_school')->default('not applicable');

            $table->string('reason_for_transfer')->default('not applicable');;

            $table->string('co_calicular_activity');

        });

    }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {

    }
}
