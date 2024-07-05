<?php

namespace App\Http\Controllers;

use App\Models\Addstaff;
use Illuminate\Http\Request;

class AddstaffController extends Controller
{

    public function allstaff(){
        $staff=Addstaff::all();
        return view('customers', compact('staff'));
       }
    public function staff(Request $request){
        $ddata= $request->validate([
                    'name' =>'required',
                    'l_name'=>'required',
                    'datebirth'=>'required',
                    'age' =>'required',
                    'gender' =>'required',
                    'role' =>'required',
                    'phone' =>'required',
                    'email' =>'required',
                    'city' =>'required',
                    'address'=>'required',
                    'm_school'=>'required',
                    'graduation' => 'required',
                    'residency'=>'required',
                    'message'=>'required',
        ]);
        // dd($data);
        $user=Addstaff::create($ddata);

        if ($user) {
            return redirect()->route('addstafffetch');
        }else{
            return response()->json('error', 'request cannot procceed');
        }
    }

    public function delete(string $id){
        $cut=Addstaff::find($id);
       $cut->delete();
        return redirect()->route('addstafffetch');
       }

            // viewdataaddstaff

            public function staffpage(string $id){
                $staffpage=Addstaff::find($id);
                return view('addstafflist',compact('staffpage'));
                }




            // updatedatastaff

            public function staffupdate(string $id)
            {
                try {
                    $staffupdate = Addstaff::find($id);
                    return response()->json(["messsage" => "data get successfully" , "Addstaff" => $staffupdate ] , 200);
                } catch (\Exception $e) {
                    return response()->json(["messsage" => $e->getMessage() ] , 500);

                }
            }


            public function datastaff(Request $request, string $id)
            {
                $newdata = Addstaff::find($id);
                $newdata->name = $request->name;
                $newdata->l_name = $request->l_name;
                $newdata->datebirth = $request->datebirth;
                $newdata->age = $request->age;
                $newdata->gender = $request->gender;
                $newdata->role = $request->role;
                $newdata->phone = $request->phone;
                $newdata->email = $request->email;
                $newdata->city = $request->city;
                $newdata->address = $request->address;
                $newdata->m_school = $request->m_school;
                $newdata->graduation = $request->graduation;
                $newdata->residency = $request->residency;
                $newdata->message = $request->message;
                $newdata->save();
                return redirect()->route('addstafffetch');
            }
        }
