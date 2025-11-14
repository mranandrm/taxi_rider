<?php

namespace App\Filament\Resources\UserBankAccounts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserBankAccountInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('bank_name'),
                TextEntry::make('bank_code'),
                TextEntry::make('account_holder_name'),
                TextEntry::make('account_number'),
                TextEntry::make('routing_number'),
                TextEntry::make('bank_iban'),
                TextEntry::make('bank_swift'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
