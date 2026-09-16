<?php

namespace App\Filament\Resources\Companies\Schemas;

use Faker\Provider\th_TH\Color;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([


                Section::make('Company Information')
                ->icon('heroicon-o-building-office')
                ->iconColor(Color::class)
                ->description('Enter the details of the company.')
                ->columns(2)
                ->columnSpan(3)
                ->schema([
                    TextInput::make('name')
                    ->columnSpanFull()
                        ->required(),
                    TextInput::make('address')
                    ->columnSpanFull()
                        ->required(),
                    TextInput::make('email')
                        ->label('Email address')
                    ->columnSpan(1)
                        ->email()
                        ->required(),
                    TextInput::make('phone-number')
                    ->label('Phone number')
                    ->columnSpan(1)
                        ->tel()
                        ->required(),
                ]),


                Section::make('Company Logo')
                ->columns()
                ->schema([
                    FileUpload::make('logo')
                    ->columnSpanFull()
                        ->image()
                        ->disk('public')
                        ->directory('logos')
                        ->visibility('public'),
                ]),


                
                //     TextInput::make('name')
                //    ->required(),
                //     TextInput::make('address')
                //    ->required(),
                //     TextInput::make('email')
                //    ->label('Email address')
                //    ->email()
                //    ->required(),
                //     TextInput::make('phone-number')
                 //   ->tel()
                 //   ->required(),


                //    FileUpload::make('logo')
                //    ->image()
                 //   ->disk('public')
                 //   ->directory('logos')
                 //   ->visibility('public'),
            ])->columns(4);
    }
}
