<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addstaff extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable =[
        'name',
        'l_name',
        'datebirth',
        'age',
        'gender',
        'role',
        'phone',
        'email',
        'city',
        'address',
        'm_school',
        'graduation',
        'residency',
        'message',
    ];
}
