<?php

namespace App\Filament\Resources\UserDetails\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UserDetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('car_model')
                    ->searchable(),
                TextColumn::make('car_color')
                    ->searchable(),
                TextColumn::make('car_plate_number')
                    ->searchable(),
                TextColumn::make('car_production_year')
                    ->searchable(),
                TextColumn::make('work_latitude')
                    ->searchable(),
                TextColumn::make('work_longitude')
                    ->searchable(),
                TextColumn::make('home_latitude')
                    ->searchable(),
                TextColumn::make('home_longitude')
                    ->searchable(),
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
