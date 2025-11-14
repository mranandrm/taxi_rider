<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
          return $schema
            ->components([
                Section::make('User Details')
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('email')
                        ->email()
                        ->required()
                        ->unique(ignoreRecord: true),
                    // DateTimePicker::make('email_verified_at'),
                    
                         
                ]),
                Section::make('User New Password')->schema([
                    TextInput::make('password')
                        ->nullable()
                        ->password()
                        ->revealable()                        
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                        ->dehydrated(fn ($state) => filled($state))
                        ->required(fn ($livewire) => ($livewire instanceof CreateRecord))                    
                        ->rule(Password::default()),
                ]),
                Section::make('Role Management')->schema([
                    Select::make('roles')
                        ->multiple()
                        ->preload()
                        ->relationship('roles', 'name')
                ])
            ]);
    }
}
