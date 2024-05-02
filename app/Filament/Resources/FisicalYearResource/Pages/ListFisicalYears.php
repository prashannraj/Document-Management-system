<?php

namespace App\Filament\Resources\FisicalYearResource\Pages;

use App\Filament\Resources\FisicalYearResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFisicalYears extends ListRecords
{
    protected static string $resource = FisicalYearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
