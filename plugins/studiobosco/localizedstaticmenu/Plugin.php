<?php namespace StudioBosco\LocalizedStaticMenu;

use Backend;
use System\Classes\PluginBase;

/**
 * Theme Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = [
        'RainLab.Pages',
        'RainLab.Translate',
    ];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'studiobosco.localizedstaticmenu::lang.plugin.name',
            'description' => 'studiobosco.localizedstaticmenu::lang.plugin.description',
            'author'      => 'Studio Bosco',
            'icon'        => 'icon-files-o',
            'homepage'    => 'https://gitlab.com/studiobosco/octobercms/localizedstaticmenu',
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'StudioBosco\LocalizedStaticMenu\Components\LocalizedStaticMenu' => 'localizedStaticMenu',
        ];
    }
}
