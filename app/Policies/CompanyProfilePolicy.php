<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\CompanyProfile;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyProfilePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:CompanyProfile');
    }

    public function view(AuthUser $authUser, CompanyProfile $companyProfile): bool
    {
        return $authUser->can('View:CompanyProfile');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:CompanyProfile');
    }

    public function update(AuthUser $authUser, CompanyProfile $companyProfile): bool
    {
        return $authUser->can('Update:CompanyProfile');
    }

    public function delete(AuthUser $authUser, CompanyProfile $companyProfile): bool
    {
        return $authUser->can('Delete:CompanyProfile');
    }

}