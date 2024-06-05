<?php

namespace App\Filament\Resources\FileUploadsResource\Pages;

use App\Filament\Resources\FileUploadsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFileUploads extends ViewRecord
{
    protected static string $resource = FileUploadsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
