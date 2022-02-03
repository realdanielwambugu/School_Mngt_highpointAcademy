<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateMarksTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table)
        {
            $table->id();

            $table->integer('admission_id');

            $table->string('class');

            $table->integer('term');

            $table->string('english');

            $table->string('math');

            $table->string('physics_or_Biology');

            $table->string('kiswahili');

            $table->string('history_or_geography');

            $table->string('chemistry');

            $table->string('CRE_or_islamic');

            $table->string('total');

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
        Schema::drop('admissions');
    }
}
