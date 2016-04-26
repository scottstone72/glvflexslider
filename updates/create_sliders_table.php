<?php namespace Stone\GlvFlexSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSlidersTable extends Migration
{

    public function up()
    {
        Schema::create('stone_glvflexslider_sliders', function($table)
        {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('name');
          $table->string('slug');
          $table->text('description')->nullable();
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stone_glvflexslider_sliders');
    }

}
