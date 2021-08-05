<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageClient2 extends Migration
{
    public function up()
    {
        Schema::table('jack_voltage_client', function($table)
        {
            $table->boolean('feature')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jack_voltage_client', function($table)
        {
            $table->dropColumn('feature');
        });
    }
}
