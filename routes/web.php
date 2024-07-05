<?php

use App\Http\Controllers\AddstaffController;
use App\Http\Controllers\authController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctoreController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PhamacyController;
use App\Http\Controllers\productController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// language route
Route::get('/lang', [userController::class, 'language_change']);
// Authentication
Route::post('login', [authController::class, 'login']);
Route::match(['get',  'post'], 'weblogout', [authController::class, 'weblogout']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/notifications', function () {
    return view('notification');
});

// Route::post('/registersave',[PatientController::class,'register']);

Route::middleware('custom')->group(function () {
    Route::get('/setting', [authController::class, 'settingdata']);
    Route::post('updateSettings', [authController::class, 'updateSet']);
    Route::get('/', [authController::class, 'Dashboard'])->name('dashboard');
    // Route::get('help', function () {
    //     return view('help');
    // });




                // adddoctor
              Route::get('/adddoctor' , function(){
                          return view ('adddoctor');
              });

            //   addpatient
            Route::get('/addpatient' , function(){
                return view ('addpatient');
    })->name('addpatient');



        // addphramacy
        Route::get('/addphramacy' , function(){
            return view ('addphramacy');
});
//   ########### button section ##############


    // customers CRUD
    // Route::get('/customers', [userController::class,  'customers']);
    // Route::post('/addCustomer', [userController::class,  'addCustomer']);
    // Route::get('/delCustomer/{user_id}', [userController::class,  'delCustomer']);
    // Route::get('/CustomerUpdateData/{user_id}', [userController::class,  'CustomerUpdateData']);
    // Route::post('/CustomerUpdate/{user_id}', [userController::class,  'CustomerUpdate']);
});


Route::get('email', function () {

    return view("emails.parent");
});




                    //.////////////////// patients add in database///////////////////////
Route::match(['get', 'post'], '/addPatient', [TestController::class, 'register']);






                    //.////////////////// doctoradd in database///////////////////////
Route::match(['get', 'post'], '/addDoctors', [DoctoreController::class, 'doctor']);




                    //.////////////////// doctoradd in database///////////////////////
Route::match(['get', 'post'], '/ addstaffs', [AddstaffController::class, 'staff']);


            // fetchdata in database all tables
  Route::get('/patient',[TestController::class,'patient'])->name('patientfetch');
  Route::get('/addpharmacy',[PhamacyController::class,'addpharmacy'])->name('pharmacyfetch');
  Route::get('/doctoradd',[DoctoreController::class,'doctoradd'])->name('doctorfetch');
  Route::get('/allstaff',[AddstaffController::class,'allstaff'])->name('addstafffetch');


    // ////////////////////////////deletedatapatient
    Route::get('/deletestaff/{id}',[TestController::class, 'delete'])->name('deletestaff');
    Route::get('/deletedoctor/{id}',[DoctoreController::class, 'delete'])->name('deletedoc');
    Route::get('/deletephamacy/{id}',[PhamacyController::class, 'delete'])->name('deletephamacy');
    Route::get('/deleteadd/{id}',[AddstaffController::class, 'delete'])->name('delete');

//   ///////////////////////////phamacy
Route::get('/phamacy',[PhamacyController::class,'phamacy'])->name('phamacy');
Route::match(['get', 'post'], '/addphamacies', [PhamacyController::class, 'phamacy']);


    //  /////////patientlist////////////////
    Route::get('patientlist', function () {

        return view("patientlist");
    })->name('patientlist');

         /////////////viewpatientdata//////////////////////////
         Route::get('/view/{id}',[TestController::class,'view'])->name('view');


        //
        Route::get('viewpatient', function () {

            return view("viewpatient");
        })->name('viewpatient');


             ///////////////////////viewdoctor////////////////////////////////////////

Route::get('doctorlist', function () {
    return view("doctorlist");
})->name('doctorlist');

Route::get('/doctorpage/{id}',[DoctoreController::class,'doctorpage'])->name('doctorpage');
Route::get('',[CountController::class,'getPatients']);







             ///////////////////////viewstafflist////////////////////////////////////////

             Route::get('addstafflist', function () {
                return view("addstafflist");
            })->name('addstafflist');

            Route::get('/staffpage/{id}',[AddstaffController::class,'staffpage'])->name('staffpage');


  ///////////////////////viewphramacylist////////////////////////////////////////

  Route::get('phramacylist', function () {
    return view("phramacylist");
})->name('phramacylist');

Route::get('/phramacypage/{id}',[PhamacyController::class,'phramacypage'])->name('phramacypage');









               ////////////////////// updatepatientdata//////////////////
Route::post('datapatient/{id}' , [TestController::class ,'datapatient'])->name('datapatient');
Route::get('/fetchpatient/{id}',[TestController::class ,'update'])->name('fetchpatient');
             ////////////////////// updatedoctoredata//////////////////////
Route::get('/fetchdoctor/{id}',[DoctoreController::class ,'updatedoc'])->name('fetchdoctor');
Route::post('update_data/{id}' , [DoctoreController::class ,'update_data'])->name('update_data');
            ////////////////////////updatestaffdata////////////////////////
Route::get('/fetchstaffdata/{id}',[addstaffController::class ,'staffupdate'])->name('fetchstaffdata');
Route::post('datastaff/{id}' , [addstaffController::class ,'datastaff'])->name('datastaff');
               ///////////////////////// updatephamacy/////////////////////////

Route::get('/fetchdataphramacy/{id}',[PhamacyController::class ,'phamcaydata'])->name('fetchdataphramacy');
Route::post('phramacyupdate/{id}' , [PhamacyController::class ,'phramacyupdate'])->name('phramacyupdate');

        ///////////////// patientvisitedata//////////////////////////

Route::get('/visite',[TestController::class,'visite'])->name('patientfetchvist');


Route::get('/viewvist/{id}',[TestController::class,'viewvist'])->name('viewvist');


            //////////////////////doctorpanelcode////////////////////////
Route::get('/doctorboard', function () {
    return view('doctordashboard');
})->name('doctorpanel');
