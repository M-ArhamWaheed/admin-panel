<?php

namespace App\Http\Controllers;

use App\Models\Doctore;
use Illuminate\Http\Request;

class DoctoreController extends Controller
{
    public function doctoradd(){
        $user=Doctore::all();
        return view('adddoctor', compact('user'));
       }
    public function doctor(Request $request){
        $ddata= $request->validate([
                    'name' =>'required',
                    'l_name'=>'required',
                    'datebirth'=>'required',
                    'age' =>'required',
                    'gender' =>'required',
                    'specialist' =>'required',
                    'phone' =>'required',
                    'email' =>'required',
                    'city' =>'required',
                    'address'=>'required',
                    'l_number'=>'required',
                    'i_Authority' => 'required',
                    'expiration'=>'required',
                    'm_school'=>'required',
                    'graduation'=>'required',
                    'residency' => 'required',
                    'message'=>'required',
        ]);
        // dd($data);
        $user=Doctore::create($ddata);

        if ($user) {
            return redirect('doctoradd');
        }else{
            return response()->json('error', 'request cannot procceed');
        }
    }
    public function delete(string $id){
        $cut=Doctore::find($id);
        $cut->delete();
        return redirect()->route('doctorfetch');
       }

//  ///////////////////viewdoctor////////////////
public function doctorpage(string $id){
    $doctorpage=Doctore::find($id);
    return view('doctorlist',compact('doctorpage'));
    }







     ////////////////////// updatepatientdata///////////////////
     public function updatedoc(string $id)
     {
         try {

             $updatedoc = Doctore::find($id);
             return response()->json(["messsage" => "data get successfully" , "doctore" => $updatedoc] , 200);
         } catch (\Exception $e) {
             return response()->json(["messsage" => $e->getMessage() ] , 500);

         }
     }

   function update_data( Request $request , $id ){
    $doctorpage = Doctore::find($id);
    $doctorpage->name = $request->input('name');
    $doctorpage->l_name = $request->input('l_name');
    $doctorpage->datebirth= $request->input('datebirth');
    $doctorpage->age = $request->input('age');
    $doctorpage->gender = $request->input('gender');
    $doctorpage->specialist = $request->input('specialist');
    $doctorpage->phone = $request->input('phone');
    $doctorpage->email = $request->input('email');
    $doctorpage->city = $request->input('city');
    $doctorpage->address = $request->input('address');
    $doctorpage->l_number = $request->input('l_number');
    $doctorpage->i_Authority = $request->input('i_Authority');
    $doctorpage->expiration = $request->input('expiration');
    $doctorpage->m_school = $request->input('m_school');
    $doctorpage->graduation = $request->input('graduation');
    $doctorpage->residency = $request->input('residency');
    $doctorpage->message = $request->input('message');


    $doctorpage->save();
    return redirect()->route('doctorfetch');
   }
    }
