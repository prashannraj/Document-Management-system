<?php

namespace App\Filament\Resources\TippaniResource\Pages;

use App\Filament\Resources\TippaniResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTippanis extends ListRecords
{
    protected static string $resource = TippaniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
