<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltagePopup2 extends Migration
{
    public function up()
    {
        Schema::table('jack_voltage_popup', function($table)
        {
            $table->boolean('enable')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jack_voltage_popup', function($table)
        {
            $table->dropColumn('enable');
        });
    }
}
