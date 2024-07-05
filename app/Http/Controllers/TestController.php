<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{


    public function patient()
    {
        $fetch = Test::all();
        return view('addpatient', compact('fetch'));
    }


    public function visite()
    {
        $fetch = Test::all();
        return view('patientvist', compact('fetch'));
    }




    public function register(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required',
            'l_name' => 'required',
            'datebirth' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'cnic' => 'required',
            'relation' => 'required',
            'f_h_name' => 'required',
            'billing_group' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);
        // dd($data);
        $user = Test::create($data);

        if ($user) {
            return redirect('patient');
        } else {
            return response()->json('error', 'request cannot procceed');
        }
    }
    //////////////////////// delete///////////////////
    public function delete(string $id)
    {
        $cut = Test::find($id);
        $cut->delete();
        return redirect()->route('patientfetch');
    }


    /////////////////// viewdatapatient///////////////////

    public function view(string $id)
    {
        $view = Test::find($id);
        return view('patientlist', compact('view'));
    }


    

    ////////////////////// updatepatientdata///////////////////
    public function update(string $id)
    {
        try {

            $update = Test::find($id);
            return response()->json(["messsage" => "data get successfully" , "patients" => $update] , 200);
        } catch (\Exception $e) {
            return response()->json(["messsage" => $e->getMessage() ] , 500);

        }
    }






    public function datapatient(Request $request, string $id)
    {
        $newdata = Test::find($id);
        $newdata->fname = $request->fname;
        $newdata->l_name = $request->l_name;
        $newdata->datebirth = $request->datebirth;
        $newdata->age = $request->age;
        $newdata->gender = $request->gender;
        $newdata->cnic = $request->cnic;
        $newdata->relation = $request->relation;
        $newdata->f_h_name = $request->f_h_name;
        $newdata->billing_group = $request->billing_group;
        $newdata->phone = $request->phone;
        $newdata->email = $request->email;
        $newdata->city = $request->city;
        $newdata->address = $request->address;
        $newdata->save();
        return redirect()->route('patientfetch');
    }

}
