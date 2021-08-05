<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageClient3 extends Migration
{
    public function up()
    {
        Schema::table('jack_voltage_client', function($table)
        {
            $table->text('feature')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jack_voltage_client', function($table)
        {
            $table->boolean('feature')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
