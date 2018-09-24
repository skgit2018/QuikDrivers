<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegDriverImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qdm_driver_idverify', function (Blueprint $table) {
            $table->string('reg_driver_image')->after('reg_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qdm_driver_idverify', function (Blueprint $table) {
            $table->dropColumn('reg_driver_image');
        });
    }
}
