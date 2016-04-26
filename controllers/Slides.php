<?php namespace Stone\GlvFlexSlider\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Slides Back-end Controller
 */
class Slides extends Controller
{

    public $slide_image;

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Stone.GlvFlexSlider', 'glvflexslider', 'slides');
    }
}