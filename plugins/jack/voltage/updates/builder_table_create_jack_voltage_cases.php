<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJackVoltageCases extends Migration
{
    public function up()
    {
        Schema::create('jack_voltage_cases', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('title');
            $table->text('overview');
            $table->text('strategy');
            $table->text('prvalue');
            $table->text('leader');
            $table->text('coverage');
            $table->text('testimonial');
            $table->text('testimonialname');
            $table->text('testimonialtitle');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jack_voltage_cases');
    }
}
