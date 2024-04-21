<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomeSettings extends Settings
{
    public string $sliderImage;

    public static function group(): string
    {
        return 'home';
    }
}
