<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageCoreValue extends Migration
{
    public function up()
    {
        Schema::table('jack_voltage_core_value', function($table)
        {
            $table->text('photo')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jack_voltage_core_value', function($table)
        {
            $table->dropColumn('photo');
        });
    }
}
