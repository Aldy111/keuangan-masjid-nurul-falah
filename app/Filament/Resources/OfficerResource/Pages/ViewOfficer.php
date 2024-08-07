<?php

namespace App\Filament\Resources\OfficerResource\Pages;

use App\Filament\Resources\OfficerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOfficer extends ViewRecord
{
    protected static string $resource = OfficerResource::class;
    protected static string $view = 'filament.resources.officers.view';
}
