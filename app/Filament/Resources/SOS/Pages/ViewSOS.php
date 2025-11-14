<?php

namespace App\Filament\Resources\SOS\Pages;

use App\Filament\Resources\SOS\SOSResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSOS extends ViewRecord
{
    protected static string $resource = SOSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
