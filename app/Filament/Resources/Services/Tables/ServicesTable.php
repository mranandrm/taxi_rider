<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('region_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('capacity')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('base_fare')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('minimum_fare')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('minimum_distance')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('per_distance')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('per_minute_drive')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('per_minute_wait')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('waiting_time_limit')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('cancellation_fee')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('payment_method'),
                TextColumn::make('commission_type')
                    ->searchable(),
                TextColumn::make('admin_commission')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('fleet_commission')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('status')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
