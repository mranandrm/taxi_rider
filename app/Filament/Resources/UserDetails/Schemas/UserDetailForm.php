<?php

namespace App\Filament\Resources\UserDetails\Schemas;
use App\models\User;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class UserDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                    // TextInput::make('user_id')
                    //     ->numeric()
                    //     ->default(null),
                    Select::make('user_id')
                        ->multiple()
                        ->preload()
                        ->relationship('user', 'name'),
                TextInput::make('car_model')
                    ->default(null),
                TextInput::make('car_color')
                    ->default(null),
                TextInput::make('car_plate_number')
                    ->default(null),
                TextInput::make('car_production_year')
                    ->default(null),
                Textarea::make('work_address')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('home_address')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('work_latitude')
                    ->default(null),
                TextInput::make('work_longitude')
                    ->default(null),
                TextInput::make('home_latitude')
                    ->default(null),
                TextInput::make('home_longitude')
                    ->default(null),
            ]);
    }
}
