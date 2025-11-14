<?php

namespace App\Filament\Resources\UserDetails\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserDetailInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('car_model'),
                TextEntry::make('car_color'),
                TextEntry::make('car_plate_number'),
                TextEntry::make('car_production_year'),
                TextEntry::make('work_latitude'),
                TextEntry::make('work_longitude'),
                TextEntry::make('home_latitude'),
                TextEntry::make('home_longitude'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
