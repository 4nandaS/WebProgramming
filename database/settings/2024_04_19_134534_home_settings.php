<?php

use Illuminate\Support\Facades\File;
use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        File::copy(resource_path('images/slider-img.png'), storage_path('app/public/slider-img.png'));
        $this->migrator->add('home.sliderImage', '/slider-img.png');
    }
};
