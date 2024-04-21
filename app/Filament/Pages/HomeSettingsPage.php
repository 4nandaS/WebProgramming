<?php

namespace App\Filament\Pages;

use App\Settings\HomeSettings;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class HomeSettingsPage extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    protected static string $settings = HomeSettings::class;

    protected static ?string $navigationGroup = 'Pengaturan';

    protected static ?string $navigationLabel = 'Halaman Utama';

    protected static ?string $title = 'Pengaturan Umum';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('sliderImage')
                    ->required()
                    ->label('Gambar Utama')
                    ->placeholder('Seret atau klik untuk memilih gambar')
                    ->confirmSvgEditing()
                    ->downloadable()
                    ->openable()
                    ->previewable()
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '5:4',
                    ])
                    ->imageCropAspectRatio('5:4')
                    ->imageResizeMode('cover')
                    ->imageEditorMode(1)
                    ->columnSpanFull()
                    ->optimize('webp')
            ]);
    }
}
