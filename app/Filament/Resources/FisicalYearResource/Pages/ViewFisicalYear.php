<?php

namespace App\Filament\Resources\FisicalYearResource\Pages;

use App\Filament\Resources\FisicalYearResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFisicalYear extends ViewRecord
{
    protected static string $resource = FisicalYearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
