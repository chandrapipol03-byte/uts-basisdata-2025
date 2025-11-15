<?php

namespace App\Filament\Admin\Resources\DokResource\Pages;

use App\Filament\Admin\Resources\DokResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoks extends ListRecords
{
    protected static string $resource = DokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
