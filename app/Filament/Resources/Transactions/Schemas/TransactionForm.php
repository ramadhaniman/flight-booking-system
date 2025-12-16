<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Umum')
                    ->schema([
                        TextInput::make('code'),
                        Select::make('flight_id')
                            ->relationship('flight', 'flight_number'),
                        Select::make('flight_class_id')
                            ->relationship('class', 'class_type'),
                    ]),
                Section::make('Informasi Penumpang')
                    ->schema([
                        TextInput::make('name'),
                        TextInput::make('email'),
                        TextInput::make('phone'),
                        Section::make('Daftar Penumpang')
                            ->schema([
                                Repeater::make('passenger')
                                    ->relationship('passengers')
                                    ->schema([
                                        TextInput::make('seat.name'),
                                        TextInput::make('name'),
                                        TextInput::make('date_of_birth'),
                                        TextInput::make('nationality'),
                                    ])
                            ])
                    ])
            ]);
    }
}
