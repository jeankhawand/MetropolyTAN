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
}
