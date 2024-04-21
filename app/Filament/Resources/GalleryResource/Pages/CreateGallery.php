<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use App\Models\Gallery;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGallery extends CreateRecord
{
    protected static string $resource = GalleryResource::class;

    #[\Override]
    protected function authorizeAccess(): void
    {
        abort_unless(function () {
            $max = 6;

            if ($max > 0) {
                return Gallery::query()
                    ->count() >= intval($max);
            }

            return false;
        }, 403, 'Gallery telah penuh.');
    }
}
