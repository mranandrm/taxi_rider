<?php

namespace App\Filament\Resources\UserBankAccounts\Pages;

use App\Filament\Resources\UserBankAccounts\UserBankAccountResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUserBankAccounts extends ListRecords
{
    protected static string $resource = UserBankAccountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
