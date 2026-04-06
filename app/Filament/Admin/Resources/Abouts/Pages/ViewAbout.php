<?php

namespace App\Filament\Admin\Resources\Abouts\Pages;

use App\Filament\Admin\Resources\Abouts\AboutResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAbout extends ViewRecord
{
    protected static string $resource = AboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
