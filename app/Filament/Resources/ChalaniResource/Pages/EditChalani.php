<?php

namespace App\Filament\Resources\ChalaniResource\Pages;

use App\Filament\Resources\ChalaniResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChalani extends EditRecord
{
    protected static string $resource = ChalaniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
