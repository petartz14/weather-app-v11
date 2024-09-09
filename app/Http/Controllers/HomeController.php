<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return inertia('Home');
    }

    public function openWeatherSearch(Request $request, WeatherService $weatherService)
    {
        $request->validate([
            'keyword' => ['required']
        ]);

        $data = $weatherService->openweather($request->input('keyword'));

        return inertia('Show', [
            'data' => $data
        ]);
    }

    public function fourSquareSearch(Request $request, WeatherService $weatherService)
    {
        $request->validate([
            'near' => ['required']
        ]);


        $data = $weatherService->fourSquare($request->all());

        return inertia('FourSquareShow', [
            'data' => $data
        ]);
    }
}
