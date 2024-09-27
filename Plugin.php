<?php namespace Settler\DeviceDetect;

use Backend;
use Detection\MobileDetect;
use System\Classes\PluginBase;
use Event;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'DeviceDetect',
            'description' => 'Plugin implements global variables: isMobile, isTablet, isDesktop for twig templates.',
            'author' => 'Settler',
            'icon' => 'icon-mobile',
            'homepage' => 'https://github.com/Colonizator1/device-detector-plugin'
            
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        // Register Twig globals
        Event::listen('cms.page.beforeDisplay', function ($controller, $url, $page) {
            $detect = new MobileDetect();

            $controller->vars['isMobile'] = $detect->isMobile();
            $controller->vars['isTablet'] = $detect->isTablet();
            $controller->vars['isDesktop'] = !$detect->isMobile() && !$detect->isTablet();
        });
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return [];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [];
    }
}
