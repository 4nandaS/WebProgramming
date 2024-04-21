<?php

namespace App\Filament\Pages;

use App\Settings\ContactSettings;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ContactSettingsPage extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-at-symbol';

    protected static string $settings = ContactSettings::class;

    protected static ?string $navigationGroup = 'Pengaturan';

    protected static ?string $navigationLabel = 'Kontak';

    protected static ?string $title = 'Pengaturan Kontak';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('address')
                    ->autosize(false)
                    ->label('Alamat')
                    ->placeholder('Alamat lengkapmu')
                    ->columnSpanFull()
                    ->rows(2)
                    ->required(),
                TextInput::make('phone')
                    ->required()
                    ->label('Nomor Telepon')
                    ->placeholder('Nomor teleponmu')
                    ->mask('+62 9999-9999-9999')
                    ->tel()
                    ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/'),
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->placeholder('Emailmu')
                    ->label('Email'),
            ]);
    }
}
