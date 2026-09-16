<?php

namespace App\Filament\Resources\Positions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PositionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Position Information')
                ->icon('heroicon-o-building-office')
                ->description('Enter the details of the position.')
                ->columns(2)
                ->columnSpan(3)
                ->schema([
                TextInput::make('name')
                    ->required(),
                TextInput::make('description'),
                TextInput::make('allowance')
                    ->required()
                    ->numeric()
                    ->default(0),
                    ]),
            ]);
    }
}
