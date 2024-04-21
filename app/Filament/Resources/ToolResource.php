<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ToolResource\Pages;
use App\Filament\Resources\ToolResource\RelationManagers;
use App\Models\Tool;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ToolResource extends Resource
{
    protected static ?string $model = Tool::class;

    protected static ?string $slug = 'tools';

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?string $navigationLabel = 'Alat-alat';

    protected static ?string $title = 'Alat-alat';

    protected static ?string $modelLabel = 'Alat-alat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('description')
                    ->label('Keterangan')
                    ->maxLength(255)
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('path')
                    ->required()
                    ->label('Gambar')
                    ->placeholder('Seret atau klik untuk memilih gambar')
                    ->confirmSvgEditing()
                    ->downloadable()
                    ->openable()
                    ->previewable()
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '1:1',
                    ])
                    ->imageCropAspectRatio('1:1')
                    ->imageResizeMode('cover')
                    ->imageEditorMode(1)
                    ->columnSpanFull()
                    ->optimize('webp'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('path')
                    ->label('Gambar')
                    ->square(),
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(20)
                    ->copyable()
            ])
            ->filters([
                //
            ])
            ->authorizeReorder()
            ->paginated(false)
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTools::route('/'),
            'create' => Pages\CreateTool::route('/create'),
            'edit' => Pages\EditTool::route('/{record}/edit'),
        ];
    }
}
