<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageCases5 extends Migration
{
    public function up()
    {
        Schema::table('jack_voltage_cases', function($table)
        {
            $table->text('title')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jack_voltage_cases', function($table)
        {
            $table->integer('title')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
