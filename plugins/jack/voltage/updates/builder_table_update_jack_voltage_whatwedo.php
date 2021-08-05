<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageWhatwedo extends Migration
{
    public function up()
    {
        Schema::rename('jack_voltage_homewhatwedo', 'jack_voltage_whatwedo');
        Schema::table('jack_voltage_whatwedo', function($table)
        {
            $table->text('brief_desc')->nullable();
        });
    }
    
    public function down()
    {
        Schema::rename('jack_voltage_whatwedo', 'jack_voltage_homewhatwedo');
        Schema::table('jack_voltage_homewhatwedo', function($table)
        {
            $table->dropColumn('brief_desc');
        });
    }
}
