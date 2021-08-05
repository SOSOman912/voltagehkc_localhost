<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJackVoltageCases3 extends Migration
{
    public function up()
    {
        Schema::table('jack_voltage_cases', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->integer('title')->nullable()->change();
            $table->text('overview')->nullable()->change();
            $table->text('strategy')->nullable()->change();
            $table->text('prvalue')->nullable()->change();
            $table->text('leader')->nullable()->change();
            $table->text('coverage')->nullable()->change();
            $table->text('testimonial')->nullable()->change();
            $table->text('testimonialname')->nullable()->change();
            $table->text('testimonialtitle')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('jack_voltage_cases', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->integer('title')->nullable(false)->change();
            $table->text('overview')->nullable(false)->change();
            $table->text('strategy')->nullable(false)->change();
            $table->text('prvalue')->nullable(false)->change();
            $table->text('leader')->nullable(false)->change();
            $table->text('coverage')->nullable(false)->change();
            $table->text('testimonial')->nullable(false)->change();
            $table->text('testimonialname')->nullable(false)->change();
            $table->text('testimonialtitle')->nullable(false)->change();
        });
    }
}
