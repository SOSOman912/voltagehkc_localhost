<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJackVoltagePopup extends Migration
{
    public function up()
    {
        Schema::create('jack_voltage_popup', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('image')->nullable();
            $table->text('link')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jack_voltage_popup');
    }
}
