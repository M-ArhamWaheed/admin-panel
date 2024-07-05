<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctore extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable =[
        'name',
        'l_name',
        'datebirth',
        'age',
        'gender',
        'specialist',
        'phone',
        'email',
        'city',
        'address',
        'l_number',
        'i_Authority',
        'expiration',
        'm_school',
        'graduation',
        'residency',
        'message',
    ];

}
