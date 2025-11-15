<?php

namespace App\Filament\Admin\Resources\DokResource\Pages;

use App\Filament\Admin\Resources\DokResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDok extends EditRecord
{
    protected static string $resource = DokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
