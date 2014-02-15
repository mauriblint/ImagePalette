<?php
/**
 * This file is part of the ImagePalette package.
 *
 * (c) Brian Foxwell <brian@foxwell.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bfoxwell\ImagePalette\Laravel;

use Bfoxwell\ImagePalette\Facade;
use Illuminate\Support\ServiceProvider;

/**
 * Class ImagePaletteServiceProvider
 * @package Bfoxwell\ImagePalette\Laravel
 */
class ImagePaletteServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('bfoxwell/image-palette');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['image-palette'] = function ($app)
		{
			return new Facade();
		};

    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return array('image-palette');
    }

} 