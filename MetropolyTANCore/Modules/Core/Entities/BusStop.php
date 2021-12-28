<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MStaack\LaravelPostgis\Eloquent\PostgisTrait;
use MStaack\LaravelPostgis\Geometries\Point;

class BusStop extends Model
{
    use HasFactory, PostgisTrait;

    protected $fillable = ['location'];
    protected $postgisFields = array(
        'location' => Point::class,
    );
    protected static function newFactory()
    {
        return \Modules\Core\Database\factories\BusStopFactory::new();
    }
    public function getStopCoordinatesAttribute(){
        $features = $this::selectRaw('name, ST_AsGeoJson(location) as geojson')->get()->map(function ($serviceRegion) {
            return [
                'type' => 'Feature',
                'geometry' => json_decode($serviceRegion->geojson),
                'properties' => [
                    'name' => $serviceRegion->name,
                ],
            ];
        });

        return json_encode([
            'type' => 'FeatureCollection',
            'features' => $features,
        ]);
    }
}
