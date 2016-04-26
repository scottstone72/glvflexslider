<?php namespace Stone\GlvFlexSlider;

use Backend;
use System\Classes\PluginBase;

/**
 * GlvFlexSlider Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'GLV FlexSlider',
            'description' => 'Adds a GlvFlexSlider',
            'author'      => 'Stone',
            'icon'        => 'icon-camera'
        ];
    }

	public function registerComponents() {
		return [
			'Stone\GlvFlexSlider\Components\GlvSlider' => 'glvSlider'
		];
	}

	public function registerNavigation()
	{
		return [
			'glvflexslider' => [
				'label'       => 'GLV Slider',
				'url'         => Backend::url('stone/glvflexslider/sliders'),
				'icon'        => 'icon-camera',
				'permissions' => [],
				'order'       => 500,

				'sideMenu' => [
					'sliders' => [
						'label' => 'Sliders',
						'url' => Backend::url('stone/glvflexslider/sliders'),
						'icon' => 'icon-camera'
					],
					'slides' => [
						'label' => 'Slides',
						'url' => Backend::url('stone/glvflexslider/slides'),
						'icon' => 'icon-play-circle'
					],

				]
			],
		];
	}
}
