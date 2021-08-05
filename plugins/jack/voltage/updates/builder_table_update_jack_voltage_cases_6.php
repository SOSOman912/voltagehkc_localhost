<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageCases6 extends Migration
{
    public function up()
    {
        Schema::table('jack_voltage_cases', function($table)
        {
            $table->text('testimoniallink')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jack_voltage_cases', function($table)
        {
            $table->dropColumn('testimoniallink');
        });
    }
}
