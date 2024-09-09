<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WeatherService;

class HomeController extends Controller
{
    public function index()
    {
        return inertia('Home');
    }

    public function search(Request $request, WeatherService $weatherService)
    {
        $request->validate([
            'keyword' => ['required']
        ]);

        $data = $weatherService->openweather($request->input('keyword'));

        dd($data);
    }
}
