<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $table = 'company_profiles';
    protected $primaryKey = 'id_compro';
    protected $guarded = ['id_compro'];
}
