<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePowerunitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('POWER_UNIT', function (Blueprint $table) {


                 $table->bigIncrements('ID_POWER_UNIT');
                 $table->string('POWER_UNIT_NUM', 23);
                 $table->string('DESCRIPTION', 64);
                $table->smallInteger('ID_CORPORATION');
                $table->smallInteger('ID_LOCATION');
                 $table->smallInteger('ID_POWER_UNIT_TYPE');
                 $table->char('IS_ACTIVE',2);
                 $table->smallInteger('INSERT_USER');
                 $table->date('INSERT_DATE');
                 $table->smallInteger('UPDATE_USER');
                 $table->date('UPDATE_DATE');
                 $table->timestamps();
                  $table->string('token', 255);

            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();

        
        });


    // TABLE CORPORATION
        Schema::create('CORPORATION', function (Blueprint $table) {


                 $table->bigIncrements('ID_CORPORATION');
                 $table->string('CORPORATION_NAME', 64);
                 $table->string('INSERT_USER', 64);
                 $table->date('INSERT_DATE');
                 $table->smallInteger('UPDATE_USER');
                 $table->date('UPDATE_DATE');
                 $table->timestamps();
                  $table->string('token', 255);

            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();

        
        });


         // TABLE LOCATION
        Schema::create('LOCATION', function (Blueprint $table) {


                 $table->bigIncrements('ID_LOCATION');
                 $table->string('LOCATION_NAME', 64);
                 $table->string('CITY', 32);
                  $table->string('PROVINCE', 32);
                 $table->decimal('LATITUDE',10,8);
                  $table->decimal('LONGITUDE',10,8);
                 $table->smallInteger('INSERT_USER');
                 $table->date('INSERT_DATE');
                 $table->smallInteger('UPDATE_USER');
                 $table->date('UPDATE_DATE');
                 $table->timestamps();
                  $table->string('token', 255);

            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();

        
        });


          // TABLE POWER_UNIT_TYPE
        Schema::create('POWER_UNIT_TYPE', function (Blueprint $table) {


                 $table->bigIncrements('ID_POWER_UNIT_TYPE');
                 $table->string('ID_POWER_UNIT_TYPE_XID', 32);
                 $table->string('DESCRIPTION', 64);
                 $table->smallInteger('INSERT_USER');
                 $table->date('INSERT_DATE');
                 $table->smallInteger('UPDATE_USER');
                 $table->date('UPDATE_DATE');
                 $table->timestamps();
                  $table->string('token', 255);


        
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('POWER_UNIT');
        Schema::dropIfExists('CORPORATION');
         Schema::dropIfExists('LOCATION');
            Schema::dropIfExists('POWER_UNIT_TYPE');
    }





}
