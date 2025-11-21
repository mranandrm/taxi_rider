<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use App\Filament\Resources\UserResource\Pages\CreateRecord;

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
                    
                    Toggle::make('is_donor')
                        ->default(false)
                        ->reactive(),
                         
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
                        ->reactive()
                        ->afterStateUpdated(function ($state, callable $set) {

                            // dd($state);

                            // If driver role is removed, disable and reset toggle
                            // if (! in_array('Donor', $state ?? [])) {
                            //     $set('is_donor', false);
                            // }
                            
                            if (! in_array(2, $state ?? [])) {
                                $set('is_donor', false);
                            }
                            
                            if (in_array(2, $state)) {
                                $set('is_donor', true);
                            }
                        }),
                ])   
            ]);
    }
}
