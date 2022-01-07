<?php
namespace Modules\User\Entities;
use Bavix\Wallet\Interfaces\Wallet;
use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Traits\HasWallets;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Itinerary\Entities\Itinerary;
use Modules\Role\Entities\RoleVar;
use Modules\User\Database\factories\UserFactory;
use MStaack\LaravelPostgis\Eloquent\PostgisTrait;
use MStaack\LaravelPostgis\Geometries\Point;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements Wallet
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasWallet, HasWallets, PostgisTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $postgisFields = array(
        'location' => Point::class,
    );
    /**
     * @return UserFactory
     */
    protected static function newFactory()
    {
        return UserFactory::new();
    }

    /**
     * Return user avatar using gravatar api
     * @return string
     */
    public function getGravatarUrlAttribute(): string
    {
        return "https://www.gravatar.com/avatar/".md5(strtolower(trim($this->email)));
    }

    /**
     * get user recent location
     * @return array
     */
    public function getRecentLocationAttribute(){
        return [

            'type' => 'FeatureCollection',
            'features' => [
                array(
                    'type' => 'Feature',
                    'geometry' => $this->location->jsonSerialize()
                )
            ]

        ];
    }
    /**
     * Get itineraries history.
     */
    public function itineraries()
    {
            return $this->hasMany(Itinerary::class);
    }
}
