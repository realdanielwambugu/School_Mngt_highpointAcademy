<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateTeachersTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table)
        {
            $table->id();

            $table->string('fullName');

            $table->string('email');

            $table->string('phone');

            $table->string('gender');

            $table->string('subject');

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
        Schema::drop('parents');
    }
}
