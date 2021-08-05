<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJackVoltageHomeslider extends Migration
{
    public function up()
    {
        Schema::create('jack_voltage_homeslider', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('photo')->nullable();
            $table->string('text')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jack_voltage_homeslider');
    }
}
