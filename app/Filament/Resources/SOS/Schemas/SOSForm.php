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
                        ->multiple()
                        ->preload()
                        ->relationship('region', 'name'),
                TextInput::make('title')
                    ->default(null),
                TextInput::make('contact_number')
                    ->default(null),
                Select::make('status')
    ->options([
        'active' => 'Active',
        'inactive' => 'Inactive',
    ])
    ->default('active')
    ->required(),
    //             Select::make('added_by')
    // ->multiple()
    // ->preload()
    // ->label('Added By')
    // ->options(
    //     User::role('rider') 
    //         ->pluck('name', 'id')
    // ),
    TextInput::make('added_by')

            ]);
    }
}
