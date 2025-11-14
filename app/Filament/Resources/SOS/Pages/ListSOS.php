<?php

namespace App\Filament\Resources\SOS\Pages;

use App\Filament\Resources\SOS\SOSResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSOS extends ListRecords
{
    protected static string $resource = SOSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
