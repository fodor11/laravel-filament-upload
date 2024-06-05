<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FileUploadsResource\Pages;
use App\Filament\Resources\FileUploadsResource\RelationManagers;
use App\Models\FileUploads;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FileUploadsResource extends Resource
{
    protected static ?string $model = FileUploads::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('route')
                    ->directory('form-attachments')
                    ->storeFileNamesIn('name')
                    ->multiple()
                    ->moveFiles()
                    ->maxSize(512000)
                    ->openable()
                    ->downloadable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('route'),
                TextColumn::make('name')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListFileUploads::route('/'),
            'create' => Pages\CreateFileUploads::route('/create'),
            'view' => Pages\ViewFileUploads::route('/{record}'),
            'edit' => Pages\EditFileUploads::route('/{record}/edit'),
        ];
    }
}
