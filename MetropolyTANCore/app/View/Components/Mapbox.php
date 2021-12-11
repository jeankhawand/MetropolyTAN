<?php

namespace App\View\Components;

class Mapbox extends \BladeUIKit\Components\Maps\Mapbox
{
    public function options(): array
    {
        return array_merge([
            'zoom' => 12,
            'style' => 'mapbox://styles/mapbox/navigation-night-v1',
            'center' => [6.818934,47.510879],
        ], parent::options());
    }
}
