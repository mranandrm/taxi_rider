<?php

namespace App\Filament\Resources\SOS\Pages;

use App\Filament\Resources\SOS\SOSResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSOS extends EditRecord
{
    protected static string $resource = SOSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
