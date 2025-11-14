<?php

namespace App\Filament\Resources\Services\Schemas;
use app\models\Region;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->default(null),
                    Select::make('region_id')
                        ->multiple()
                        ->preload()
                        ->relationship('region', 'name'),
                TextInput::make('capacity')
                    ->numeric()
                    ->default(1),
                TextInput::make('base_fare')
                    ->numeric()
                    ->default(null),
                TextInput::make('minimum_fare')
                    ->numeric()
                    ->default(null),
                TextInput::make('minimum_distance')
                    ->numeric()
                    ->default(null),
                TextInput::make('per_distance')
                    ->numeric()
                    ->default(null),
                TextInput::make('per_minute_drive')
                    ->numeric()
                    ->default(null),
                TextInput::make('per_minute_wait')
                    ->numeric()
                    ->default(null),
                TextInput::make('waiting_time_limit')
                    ->numeric()
                    ->default(null),
                TextInput::make('cancellation_fee')
                    ->numeric()
                    ->default(null),
                Select::make('payment_method')
                    ->options(['cash_wallet' => 'Cash wallet', 'cash' => 'Cash', 'wallet' => 'Wallet'])
                    ->default('cash')
                    ->required(),
                TextInput::make('commission_type')
                    ->default(null),
                TextInput::make('admin_commission')
                    ->numeric()
                    ->default(0),
                TextInput::make('fleet_commission')
                    ->numeric()
                    ->default(0),
                 Select::make('status')
    ->options([
        'active' => 'Active',
        'inactive' => 'Inactive',
    ])
    ->default('active')
    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
