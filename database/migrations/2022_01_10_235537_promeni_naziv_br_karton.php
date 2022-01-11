<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromeniNazivBrKarton extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacijents', function (Blueprint $table) {
            $table->renameColumn('brKartona', 'broj_kartona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacijents', function (Blueprint $table) {
            $table->renameColumn('broj_kartona', 'brKartona');
        });
    }
}
