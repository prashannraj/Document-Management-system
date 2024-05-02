<?php

namespace App\Filament\Resources\DartaResource\Pages;

use App\Filament\Resources\DartaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDarta extends EditRecord
{
    protected static string $resource = DartaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
