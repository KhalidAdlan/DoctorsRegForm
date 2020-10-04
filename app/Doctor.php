<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = [
        'motivation_letter',
        'first_name',
        'second_name',
        'third_name',
        'fourth_name',
        'email',
        'phone',
        'state',
        'area',
        'address_1',
        'address_2',
        'speciality',
        'past_experience',
        'how_did_you_hear_about_us',
        'permenant_registration',
        'graduation_certificate',
        'national_id'
    ];
}
