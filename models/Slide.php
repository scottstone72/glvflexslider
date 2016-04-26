<?php namespace Stone\GlvFlexSlider\Models;

use Model;

/**
 * Slide Model
 */
class Slide extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'stone_glvflexslider_slides';

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
      'sliders' => 'Stone\GlvFlexSlider\Models\Slider'
    ];

    public $attachOne = [
      'slide_image' => ['System\Models\File']
    ];

}