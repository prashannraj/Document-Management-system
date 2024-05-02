<?php

namespace App\Filament\Resources\ChalaniResource\Pages;

use App\Filament\Resources\ChalaniResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewChalani extends ViewRecord
{
    protected static string $resource = ChalaniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
