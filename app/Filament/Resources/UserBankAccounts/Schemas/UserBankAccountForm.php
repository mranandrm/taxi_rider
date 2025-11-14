<?php

namespace App\Filament\Resources\UserBankAccounts\Schemas;
use app\models\User;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class UserBankAccountForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Select::make('user_id')
                        ->multiple()
                        ->preload()
                        ->relationship('user', 'name'),
                TextInput::make('bank_name')
                    ->default(null),
                TextInput::make('bank_code')
                    ->default(null),
                TextInput::make('account_holder_name')
                    ->default(null),
                TextInput::make('account_number')
                    ->default(null),
                Textarea::make('bank_address')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('routing_number')
                    ->default(null),
                TextInput::make('bank_iban')
                    ->default(null),
                TextInput::make('bank_swift')
                    ->default(null),
            ]);
    }
}
