<?php

namespace App\Filament\Resources\FileUploadsResource\Pages;

use App\Filament\Resources\FileUploadsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFileUploads extends ListRecords
{
    protected static string $resource = FileUploadsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
