<?php namespace Stone\GlvFlexSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSlidesTable extends Migration
{

    public function up()
    {
        Schema::create('stone_glvflexslider_slides', function($table)
        {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('title')->nullable();
          $table->string('company')->nullable();
          $table->string('slogan')->nullable();
          $table->text('html_content')->nullable();
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stone_glvflexslider_slides');
    }

}
