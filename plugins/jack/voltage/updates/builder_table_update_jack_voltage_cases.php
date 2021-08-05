<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageCases extends Migration
{
    public function up()
    {
        Schema::table('jack_voltage_cases', function($table)
        {
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::table('jack_voltage_cases', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
