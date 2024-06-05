<?php

namespace App\Filament\Resources\FileUploadsResource\Pages;

use App\Filament\Resources\FileUploadsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFileUploads extends EditRecord
{
    protected static string $resource = FileUploadsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
