<?php

namespace App\Filament\Resources\AppSettings\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AppSettingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('site_name'),
                TextEntry::make('site_email'),
                TextEntry::make('site_logo'),
                TextEntry::make('site_favicon'),
                TextEntry::make('site_copyright'),
                TextEntry::make('facebook_url'),
                TextEntry::make('instagram_url'),
                TextEntry::make('support_number'),
                TextEntry::make('twitter_url'),
                TextEntry::make('linkedin_url'),
                TextEntry::make('contact_email'),
                TextEntry::make('contact_number'),
                TextEntry::make('help_support_url'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
