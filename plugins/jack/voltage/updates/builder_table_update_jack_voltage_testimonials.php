<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageTestimonials extends Migration
{
    public function up()
    {
        Schema::table('jack_voltage_testimonials', function($table)
        {
            $table->text('link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jack_voltage_testimonials', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
