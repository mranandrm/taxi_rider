<?php

namespace App\Filament\Resources\SOS\Schemas;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use app\models\Region;
use app\models\user;
use Filament\Schemas\Schema;

class SOSForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
         Select::make('region_id')
    ->preload()
    ->relationship('region', 'name')
    ->required(),

TextInput::make('title')->nullable(),

TextInput::make('contact_number')->nullable(),

Select::make('status')
    ->options([
        'active' => 'Active',
        'inactive' => 'Inactive',
    ])
    ->default('active')
    ->required(),

Select::make('added_by')
    ->label('Added By')
    ->options(
        User::role('rider')->pluck('name', 'id')
    )
    ->required(),

    
            ]);
    }
}
