<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gi extends Model
{
    protected $table = "guardian_information";
    protected $fillable = [
        'user_id',
        'nameGuardian',
        'occupationGuardian',
        'DesignationGuardian',
        'photoUploadGuardian',
        'placeofworkGuardian',
        'NameOfOrganizationGuardian',
        'OfficeAddressGuardian',
        'PresentResidentialAddressGuardian',
        'EmailAddressGuardian',
        'OfficeNumberGuardian',
        'MobileNumberGuardian',
        'OtherNumberGuardian',
        'AnnualIncomeGuardian',
        'NationalityGuardian',
        'cnicGuardian',
        'ReligionGuardian'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}