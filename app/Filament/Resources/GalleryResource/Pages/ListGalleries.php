<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use App\Models\Gallery;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGalleries extends ListRecords
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->disabled(function () {
                    $max = 6;

                    if ($max > 0) {
                        return Gallery::query()
                            ->count() >= intval($max);
                    }

                    return false;
                }),
        ];
    }
}
