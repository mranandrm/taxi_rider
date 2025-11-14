<?php

namespace App\Filament\Resources\Regions\Schemas;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RegionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->default(null),
                TextInput::make('distance_unit')
                    ->default('km'),
                Textarea::make('coordinates')
                    ->default(null)
                    ->columnSpanFull(),
                Select::make('status')
    ->options([
        'active' => 'Active',
        'inactive' => 'Inactive',
    ])
    ->default('active')
    ->required(),

                TextInput::make('timezone')
                    ->default('UTC'),
            ]);
    }
}
