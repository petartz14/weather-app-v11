<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    public function openweather(string $value)
    {
        $data = Http::openWeather($value);

        return $data->object();
    }

    public function fourSquare($request)
    {
        $data = Http::fourSquare($request);

        return $data->object();
    }
}
