<?php namespace Stone\GlvFlexSlider\Components;

use Cms\Classes\ComponentBase;
use Stone\GlvFlexSlider\Models\Slider;

class GlvSlider extends ComponentBase {

  /**
   * @var Object representing our slides.
   */
  public $slides;

  public function componentDetails() {
    return [
      'name'        => 'GlvSlider Component',
      'description' => 'Adds a GlvSlider'
    ];
  }


  public function defineProperties() {
    return [
      'sliderID' => [
        'title'       => 'Slider ID',
        'description' => 'Choose slider that you want to display.',
        'type'        => 'dropdown',
        'placeholder' => 'Select Slider',
        'default'     => ''
      ]
    ];
  }

  public function getSliderIDOptions() {
    $sliders = Slider::all();
    foreach ($sliders as $slider) {
      $slider_names[$slider->id] = $slider->name;
    }
    return $slider_names;
  }

  public function onRun() {
//    $this->addCss('/plugins/stone/glvflexslider/assets/css/camera.css');
//    $this->addJs('/plugins/stone/glvflexslider/assets/js/camera.js');
//    $this->addJs('/plugins/stone/glvflexslider/assets/js/jquery.easing.1.3.js');
//    $this->addJs('/plugins/stone/glvflexslider/assets/js/jquery.mobile.customized.min.js');

    $this->slides = Slider::find($this->property('sliderID'))->slides;

//        dd($this->slides);
  }

}