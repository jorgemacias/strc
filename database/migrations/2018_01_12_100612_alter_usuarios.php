<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table -> unsignedInteger('created_by') -> nullable() -> default(null) -> after('created_at');
            $table -> unsignedInteger('updated_by') -> nullable() -> default(null) -> after('updated_at');
            $table -> unsignedInteger('deleted_by') -> nullable() -> default(null) -> after('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            //
        });
    }
}
