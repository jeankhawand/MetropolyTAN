<?php

use Illuminate\Support\Facades\Route;
use Modules\Core\Entities\BusStop;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $bus_stops = cache()->remember('bus_stops_geojson', 15, function () {
        $features = BusStop::selectRaw('name, ST_AsGeoJson(location) as geojson')->get()->map(function ($stop) {
            return [
                'type' => 'Feature',
                'geometry' => json_decode($stop->geojson),
                'properties' => [
                    'title' => $stop->name,
                ],
            ];
        });
        return json_encode([
            'type' => 'FeatureCollection',
            'features' => $features,
        ]);
    });
    return view('index',['bus_stops'=>$bus_stops]);
});
