<?php

namespace App\Filament\Resources\FisicalYearResource\Pages;

use App\Filament\Resources\FisicalYearResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFisicalYear extends EditRecord
{
    protected static string $resource = FisicalYearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
