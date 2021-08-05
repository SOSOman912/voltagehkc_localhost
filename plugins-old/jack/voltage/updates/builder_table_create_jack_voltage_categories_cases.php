<?php namespace Jack\Voltage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJackVoltageCategoriesCases extends Migration
{
    public function up()
    {
        Schema::create('jack_voltage_categories_cases', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('case2_id');
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jack_voltage_categories_cases');
    }
}
