<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageClient extends Migration
{
    public function up()
    {
        Schema::rename('jack_voltage_clients', 'jack_voltage_client');
        Schema::table('jack_voltage_client', function($table)
        {
            $table->text('image');
        });
    }
    
    public function down()
    {
        Schema::rename('jack_voltage_client', 'jack_voltage_clients');
        Schema::table('jack_voltage_clients', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
