<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

use App\Models\User;

class StatsOverview extends StatsOverviewWidget
{
   
    protected ?string $pollingInterval = '5s';

    protected function getStats(): array
    {
        return [
            Stat::make('Admin', User::count()),
            Stat::make('Driver', User::count()),
            Stat::make('Raider', User::count()),
        ];
    }
}
