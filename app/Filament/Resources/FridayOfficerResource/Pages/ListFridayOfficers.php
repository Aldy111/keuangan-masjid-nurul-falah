<?php

namespace App\Filament\Resources\FridayOfficerResource\Pages;

use App\Filament\Resources\FridayOfficerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFridayOfficers extends ListRecords
{
    protected static string $resource = FridayOfficerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
