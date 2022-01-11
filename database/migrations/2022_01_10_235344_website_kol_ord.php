<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WebsiteKolOrd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ordinacijas', function (Blueprint $table) {
            $table->after('vlasnik', function ($table) {
                $table->string('website')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordinacijas', function (Blueprint $table) {
            $table->dropColumn('website');
        });
    }
}