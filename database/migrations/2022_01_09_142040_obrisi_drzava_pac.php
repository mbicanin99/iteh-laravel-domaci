<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObrisiDrzavaPac extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacijents', function (Blueprint $table) {
            $table->dropColumn('drzava');
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
            $table->after('grad', function ($table) {
                $table->string('drzava');
            });
        });
    }
}
