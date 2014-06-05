<?php namespace Fideloper\Example;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
	
		$this->app->bindShared('underlyingclass', function($app)
		{
			return new UnderlyingClass;
		});
		/*
        // Register 'underlyingclass' instance container to our UnderlyingClass object
        $this->app['underlyingclass'] = $this->app->share(function($app)
        {
            return new UnderlyingClass;
        });
		*/
		
        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function()
        {
        //    $loader = \Illuminate\Foundation\AliasLoader::getInstance();
         //   $loader->alias('UnderlyingClass', 'Fideloper\Example\Facades\UnderlyingClass');
        });
		
    }
}