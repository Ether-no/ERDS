<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Encuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->bigIncrements('id_encuestas');
            $table->string('tempD',80);
            $table->string('preg_3',80);
            $table->string('preg_4',80);
            $table->string('preg_5',80);
            $table->string('preg_6',80);
            $table->string('preg_7',80);
            $table->string('preg_8',80);
            $table->string('preg_9',80);
            $table->string('qr',200);
            $table->date('dia');
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
        //
    }
}
