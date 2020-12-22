<?php

use Illuminate\Database\Migrations\Migration;

class AddUserBioAndSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->text('body')->nullable();
            $table->text('preferences')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('body');
            $table->dropColumn('preferences');
        });
    }
}
