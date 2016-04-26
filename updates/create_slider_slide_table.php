<?php namespace Stone\GlvFlexSlider\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSliderSlideTable extends Migration
{

	public function up()
	{
		Schema::create('stone_glvflexslider_slider_slide', function($table)
		{
			$table->integer('slide_id')->unsigned();
			$table->integer('slider_id')->unsigned();
			$table->primary(['slide_id', 'slider_id']);
		});
	}

	public function down()
	{
		Schema::dropIfExists('stone_glvflexslider_slider_slide');
	}

}