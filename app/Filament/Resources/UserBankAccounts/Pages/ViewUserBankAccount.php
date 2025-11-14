<?php

namespace App\Filament\Resources\UserBankAccounts\Pages;

use App\Filament\Resources\UserBankAccounts\UserBankAccountResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewUserBankAccount extends ViewRecord
{
    protected static string $resource = UserBankAccountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
