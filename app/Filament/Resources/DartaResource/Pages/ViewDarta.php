<?php

namespace App\Filament\Resources\DartaResource\Pages;

use App\Filament\Resources\DartaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDarta extends ViewRecord
{
    protected static string $resource = DartaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
