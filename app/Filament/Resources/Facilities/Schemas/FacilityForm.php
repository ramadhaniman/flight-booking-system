<?php

namespace App\Filament\Resources\Facilities\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FacilityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')->image()->directory('facilities')->required()->columnSpan(2),
                TextInput::make('name')->required(),
                TextInput::make('description')->required(),
            ]);
    }
}
