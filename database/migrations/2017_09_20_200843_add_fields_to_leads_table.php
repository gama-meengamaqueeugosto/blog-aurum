<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->string('pg1')->nullable()->default(null);
            $table->string('pg2')->nullable()->default(null);
            $table->string('pg3')->nullable()->default(null);
            $table->text('pg4')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->string('phone')->nullable()->default(null);
            $table->string('site')->nullable()->default(null);
            $table->string('oab')->nullable()->default(null);
        });
    }
}
