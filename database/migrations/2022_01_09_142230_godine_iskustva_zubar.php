<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GodineIskustvaZubar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zubars', function (Blueprint $table) {
            $table->renameColumn('godIskustva', 'godine_iskustva');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zubars', function (Blueprint $table) {
            $table->renameColumn('godine_iskustva', 'godIskustva');
        });
    }
}
