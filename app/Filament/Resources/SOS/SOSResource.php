<?php

namespace App\Filament\Resources\SOS;

use App\Filament\Resources\SOS\Pages\CreateSOS;
use App\Filament\Resources\SOS\Pages\EditSOS;
use App\Filament\Resources\SOS\Pages\ListSOS;
use App\Filament\Resources\SOS\Pages\ViewSOS;
use App\Filament\Resources\SOS\Schemas\SOSForm;
use App\Filament\Resources\SOS\Schemas\SOSInfolist;
use App\Filament\Resources\SOS\Tables\SOSTable;
use App\Models\SOS;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SOSResource extends Resource
{
    protected static ?string $model = SOS::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'SOS';

    public static function form(Schema $schema): Schema
    {
        return SOSForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SOSInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SOSTable::configure($table);
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
            'index' => ListSOS::route('/'),
            'create' => CreateSOS::route('/create'),
            'view' => ViewSOS::route('/{record}'),
            'edit' => EditSOS::route('/{record}/edit'),
        ];
    }
}
