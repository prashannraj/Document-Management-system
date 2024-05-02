<?php

namespace App\Filament\Resources\TippaniResource\Pages;

use App\Filament\Resources\TippaniResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTippani extends EditRecord
{
    protected static string $resource = TippaniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
