<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/users', function () {
    $users=[
["id"=>1,
"name"=>"shaimaa",
"email"=>"shaimaa@gmail.com",
"city"=>"egypt"],


["id"=>2,
"name"=>"asmaa",
"email"=>"asmaa@gmail.com",
"city"=>"london"],


["id"=>3,
"name"=>"soha",
"email"=>"soha@gmail.com",
"city"=>"sudan"],


["id"=>4,
"name"=>"noha",
"email"=>"noha@gmail.com",
"city"=>"moroco"],
];
    return view("users.index",["users"=>$users]);
});



Route::get('/show/{id}', function ($id){

    $user=
        ["id"=>$id,
        "name"=>"shaimaa",
        "email"=>"shaimaa@gmail.com",
        "city"=>"egypt"];

return view('users.show',$user);

})->where('id','[0-9]+');


Route::get('/edit/{id}', function ($id){

    $user=
        ["id"=>$id,
        "name"=>"shaimaa",
        "email"=>"shaimaa@gmail.com",
        "city"=>"egypt"];

return view('users.edit',$user);

})->where('id','[0-9]+');


Route::post("/update", function (){


return "update is done";

});

Route::get("/create", function (){


    return view("users.create");
    
    });

    Route::post("/store", function (){


        return "user is stored";
        
        });