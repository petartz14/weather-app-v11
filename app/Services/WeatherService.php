<?php

class WeatherService
{
    public function openweather(string $value)
    {
        $data = Http::openWeather($value);

        return $data;
    }
}
