<?php

namespace App\Filament\Resources\TippaniResource\Pages;

use App\Filament\Resources\TippaniResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTippani extends ViewRecord
{
    protected static string $resource = TippaniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
