<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $table = 'patients';

    protected $primaryKey = 'id';
    protected $fillable = [
             'fname',
        'l_name',
        'datebirth',
        'age',
        'gender',
        'cnic',
        'relation',
        'f_h_name',
        'billing_group',
        'phone',
        'email',
        'city',
        'address',
    ];
}
