<?php

namespace App\Filament\Resources\AppSettings\Schemas;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AppSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('site_name')
                    ->default(null),
                TextInput::make('site_email')
                    ->email()
                    ->default(null),
                     FileUpload::make('site_logo')
                ->directory('logos')
                ->image()
                ->maxSize(2048),
                   FileUpload::make('site_favicon')
                ->directory('favicon')
                ->image()
                ->maxSize(2048),
                Textarea::make('site_description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('site_copyright')
                    ->default(null),
                TextInput::make('facebook_url')
                    ->default(null),
                TextInput::make('instagram_url')
                    ->default(null),
                TextInput::make('support_number')
                    ->default(null),
                TextInput::make('twitter_url')
                    ->default(null),
                TextInput::make('linkedin_url')
                    ->default(null),
        
                    Select::make('language_option')
                ->label('Language Option')
                ->options([
                    'en' => 'English',
                    'ta' => 'Tamil',
                    'hi' => 'Hindi',
                    'ml' => 'Malayalam',
                    'te' => 'Telugu',
                ])
                ->default('en'),
                TextInput::make('contact_email')
                    ->email()
                    ->default(null),
                TextInput::make('contact_number')
                    ->default(null),
                TextInput::make('help_support_url')
                    ->default(null),
                Select::make('notification_settings')
                ->label('Notification Settings')
                ->options([
                    'enabled' => 'Enabled',
                    'disabled' => 'Disabled',
                ])
                ->default('enabled')
                ->required()
                ->columnSpanFull(),
            ]);
    }
}
