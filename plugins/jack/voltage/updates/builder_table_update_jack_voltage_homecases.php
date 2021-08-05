<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageHomecases extends Migration
{
    public function up()
    {
        Schema::table('jack_voltage_homecases', function($table)
        {
            $table->text('link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jack_voltage_homecases', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
