<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('problems', function (Blueprint $table) {
            $table->boolean('completed')->default(false);
            $table->integer('specialist_id');
            $table->mediumText('resolved_by')->nullable();

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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('completed');
            $table->dropColumn('specialist_id');
            $table->dropColumn('resolved_by');
            
        });
    }
}
