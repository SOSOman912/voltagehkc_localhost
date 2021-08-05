<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageSocialmedia extends Migration
{
    public function up()
    {
        Schema::table('jack_voltage_socialmedia', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('jack_voltage_socialmedia', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->text('image');
        });
    }
}
