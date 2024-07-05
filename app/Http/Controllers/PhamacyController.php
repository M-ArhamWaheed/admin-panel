<?php

namespace App\Http\Controllers;

use App\Models\phamacy;
use Illuminate\Http\Request;

class PhamacyController extends Controller
{
    public function addpharmacy(){
        $data=phamacy::all();
        return view('addphramacy', compact('data'));
       }
    public function phamacy(Request $request){
        $ddata= $request->validate([
                    'name' =>'required',
                    'phone'=>'required',
                    'telephone'=>'required',
                    'email' =>'required',
                    'address' =>'required',
                    'fname' =>'required',
                    'l_name' =>'required',
                    'datebirth' =>'required',
                    'phoneno' =>'required',
                    'emailaddress'=>'required',
                    'city'=>'required',
                    'addresses' => 'required',
                    'license'=>'required',
                    'work'=>'required',
        ]);
        // dd($data);
        $user=phamacy::create($ddata);

        if ($user) {
            return redirect('addpharmacy');
        }else{
            return response()->json('error', 'request cannot procceed');
        }
    }

    public function delete(string $id){
        $cut=phamacy::find($id);
        $cut->delete();
        return redirect()->route('pharmacyfetch');
       }






    //    viewphramacy/////////////////
    public function phramacypage(string $id){
        $phramacypage=phamacy::find($id);
        return view('phramacylist',compact('phramacypage'));
        }


    /////////////////////////////updatephramaceydata//////////////////////////////////

    public function phamcaydata(string $id)
    {
        try {

            $medupdate = phamacy::find($id);
            return response()->json(["messsage" => "data get successfully" , "phamacy" => $medupdate] , 200);
        } catch (\Exception $e) {
            return response()->json(["messsage" => $e->getMessage() ] , 500);

        }
    }


    public function phramacyupdate(Request $request, string $id)
    {
        $newdata = phamacy::find($id);
        $newdata->name = $request->name;
        $newdata->phone = $request->phone;
        $newdata->telephone = $request->telephone;
        $newdata->email = $request->email;
        $newdata->address = $request->address;
        $newdata->fname = $request->fname;
        $newdata->l_name = $request->l_name;
        $newdata->datebirth = $request->datebirth;
        $newdata->phoneno = $request->phoneno;
        $newdata->email = $request->email;
        $newdata->city = $request->city;
        $newdata->addresses = $request->addresses;
        $newdata->license = $request->license;
        $newdata->work = $request->work;
        $newdata->save();
        return redirect()->route('phamacy');
    }


    }

