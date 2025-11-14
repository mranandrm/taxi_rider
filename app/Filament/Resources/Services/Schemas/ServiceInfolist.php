<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ServiceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('region_id')
                    ->numeric(),
                TextEntry::make('capacity')
                    ->numeric(),
                TextEntry::make('base_fare')
                    ->numeric(),
                TextEntry::make('minimum_fare')
                    ->numeric(),
                TextEntry::make('minimum_distance')
                    ->numeric(),
                TextEntry::make('per_distance')
                    ->numeric(),
                TextEntry::make('per_minute_drive')
                    ->numeric(),
                TextEntry::make('per_minute_wait')
                    ->numeric(),
                TextEntry::make('waiting_time_limit')
                    ->numeric(),
                TextEntry::make('cancellation_fee')
                    ->numeric(),
                TextEntry::make('payment_method'),
                TextEntry::make('commission_type'),
                TextEntry::make('admin_commission')
                    ->numeric(),
                TextEntry::make('fleet_commission')
                    ->numeric(),
                TextEntry::make('status')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
