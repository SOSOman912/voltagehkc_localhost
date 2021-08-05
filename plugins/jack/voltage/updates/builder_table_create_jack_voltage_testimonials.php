<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJackVoltageTestimonials extends Migration
{
    public function up()
    {
        Schema::create('jack_voltage_testimonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('quote')->nullable();
            $table->text('name')->nullable();
            $table->text('title')->nullable();
            $table->text('image')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jack_voltage_testimonials');
    }
}
