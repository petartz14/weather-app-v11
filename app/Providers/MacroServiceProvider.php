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
                'appid' => config('weather.openweather_api_key')
            ]);
        });

        Http::macro('fourSquare', function ($query) {
            return Http::get('https://api.foursquare.com/v2/venues/search', [
                ...$query,
                'v' => '20231010',
                'oauth_token' => 'CCD2OZ3UR2OULSILGMJOBSEUNVG4GGH0PPSAMNOOFGR3VSTH'
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
