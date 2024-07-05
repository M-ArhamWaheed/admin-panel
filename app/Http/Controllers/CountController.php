<?php

namespace App\Http\Controllers;

use App\Models\Addstaff;
use App\Models\Doctore;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class CountController extends Controller
{
    public function getPatients() {
        $patient = Test::all()->count();
        $doctor = Doctore::all()->count();
        $staff = Addstaff::all()->count();
        return view("dashboard" , compact("patient" , "doctor", "staff"));
    }
}
