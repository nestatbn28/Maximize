<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMlmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mlm', function (Blueprint $table) {
            $table->id();
            $table->string('Nama',255);
            $table->string('Alamat',255);
            $table->string('notel',30);
            $table->integer('upline')->length(11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mlm');
    }
}
