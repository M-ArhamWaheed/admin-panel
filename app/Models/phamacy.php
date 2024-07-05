<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phamacy extends Model
{
    use HasFactory;


    public $timestamps=false;

    protected $fillable =[
        'name',
        'phone',
        'telephone',
        'email',
        'address',
        'fname',
        'l_name',
        'datebirth',
        'phoneno',
        'emailaddress',
        'city',
        'addresses',
        'license',
        'work',
    ];

}
