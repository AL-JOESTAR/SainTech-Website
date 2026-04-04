<?php

namespace App\Filament\Admin\Resources\CompanyProfiles\Pages;

use App\Filament\Admin\Resources\CompanyProfiles\CompanyProfileResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCompanyProfile extends CreateRecord
{
    protected static string $resource = CompanyProfileResource::class;
}
