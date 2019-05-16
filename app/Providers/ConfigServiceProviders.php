<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        config([
            'laravellocalization.supportedLocales' => [
                'kk'  => array( 'name' => 'kk', 'name2' => 'Казахский', 'script' => 'Cyrl', 'native' => 'kk' ),
                'ru'  => array( 'name' => 'ru', 'name2' => 'Русский', 'script' => 'Cyrl', 'native' => 'ru' ),
            ],
        
            'laravellocalization.useAcceptLanguageHeader' => true,
        
            'laravellocalization.hideDefaultLocaleInURL' => false


        ]);
    }
}
