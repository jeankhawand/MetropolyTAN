<?php

namespace Modules\Itinerary\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\User;
use Spatie\Permission\Traits\HasRoles;

class Itinerary extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Itinerary\Database\factories\ItineraryFactory::new();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
