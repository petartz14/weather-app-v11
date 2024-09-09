<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Http::macro('openWeather', function ($value) {
            return Http::get('https://api.openweathermap.org/data/2.5/forecast', [
                'q' => $value,
                'appid' => config('WEATHER.openweather_api_key')
            ]);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
