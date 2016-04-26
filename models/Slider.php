<?php namespace Stone\GlvFlexSlider\Models;

use Model;

/**
 * Slider Model
 */
class Slider extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'stone_glvflexslider_sliders';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
      'slides' => ['Stone\GlvFlexSlider\Models\Slide', 'table' => 'stone_glvflexslider_slider_slide']
    ];

}