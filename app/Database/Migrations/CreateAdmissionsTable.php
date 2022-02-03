<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateAdmissionsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table)
        {
            $table->id();

            $table->integer('parent_id');

            $table->string('fullName');

            $table->string('phone');

            $table->string('email');

            $table->string('gender');

            $table->integer('class');

            $table->string('county');

            $table->string('city');

            $table->string('address');

            $table->string('status');

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
