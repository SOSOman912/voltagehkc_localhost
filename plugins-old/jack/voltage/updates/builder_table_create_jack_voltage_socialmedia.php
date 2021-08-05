<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJackVoltageSocialmedia extends Migration
{
    public function up()
    {
        Schema::create('jack_voltage_socialmedia', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('image');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jack_voltage_socialmedia');
    }
}
