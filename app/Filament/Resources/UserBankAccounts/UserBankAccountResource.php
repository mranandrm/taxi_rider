<?php

namespace App\Filament\Resources\UserBankAccounts;

use App\Filament\Resources\UserBankAccounts\Pages\CreateUserBankAccount;
use App\Filament\Resources\UserBankAccounts\Pages\EditUserBankAccount;
use App\Filament\Resources\UserBankAccounts\Pages\ListUserBankAccounts;
use App\Filament\Resources\UserBankAccounts\Pages\ViewUserBankAccount;
use App\Filament\Resources\UserBankAccounts\Schemas\UserBankAccountForm;
use App\Filament\Resources\UserBankAccounts\Schemas\UserBankAccountInfolist;
use App\Filament\Resources\UserBankAccounts\Tables\UserBankAccountsTable;
use App\Models\UserBankAccount;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UserBankAccountResource extends Resource
{
    protected static ?string $model = UserBankAccount::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'UserBankAccount';

    public static function form(Schema $schema): Schema
    {
        return UserBankAccountForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return UserBankAccountInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UserBankAccountsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUserBankAccounts::route('/'),
            'create' => CreateUserBankAccount::route('/create'),
            'view' => ViewUserBankAccount::route('/{record}'),
            'edit' => EditUserBankAccount::route('/{record}/edit'),
        ];
    }
}
