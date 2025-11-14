<?php

namespace App\Filament\Resources\SOS\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SOSInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('region_id')
                    ->numeric(),
                TextEntry::make('title'),
                TextEntry::make('contact_number'),
                TextEntry::make('status')
                    ->numeric(),
                TextEntry::make('added_by')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
