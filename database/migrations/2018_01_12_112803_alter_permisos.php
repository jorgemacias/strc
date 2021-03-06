<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPermisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permisos', function (Blueprint $table) {
            $table->integer('created_by')->after('created_at')->nullable();
            $table->integer('updated_by')->after('updated_at')->nullable();
            $table->integer('deleted_by')->after('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permisos', function (Blueprint $table) {
            //
        });
    }
}
