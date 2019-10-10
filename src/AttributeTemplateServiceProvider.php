<?php

namespace Kanka\Dnd5eCharacter;

use Illuminate\Support\ServiceProvider;

class AttributeTemplateServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'dnd5echaracter');

        $this->loadTranslationsFrom(realpath(__DIR__.'/../publishable/lang'), 'dnd5echaracter');


        // Assets
        $this->publishes([
            __DIR__.'/../publishable/assets' => public_path('vendor/dnd5echaracter'),
        ], 'dnd5echaracter');

        // Config
        $this->publishes([
            __DIR__.'/../publishable/config/dnd5echaracter.php' => config_path('dnd5echaracter.php'),
        ]);
        $this->mergeConfigFrom(
            __DIR__.'/../publishable/config/dnd5echaracter.php', 'dnd5echaracter'
        );

        // Translations
        $this->loadTranslationsFrom(__DIR__.'/../publishable/lang', 'dnd5echaracter');

        $this->publishes([
            __DIR__.'/../publishable/lang' => resource_path('lang/vendor/dnd5echaracter'),
        ]);
    }
}
