<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

//Route::Get('/user','UserController');

Route::get('/user', function () {
    return view('home');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/greeting/{name}', function ($name = null) {
    if ($name) {
        echo "Hello $name !";
    } else {
        echo "Hello World";
    }
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    if (
        $request->username == 'admin'
        && $request->password == 'admin'
    ) {
        return view('welcome_admin');
    }

    return view('login_error');
});
Route::get('/calculator', function () {
    return view('calculator');
});
Route::post('/display', function (Illuminate\Http\Request $request) {
 $description = $request->description;
    $price = $request->price;
    $discount = $request->discount;
    $discount1=$discount;
    $discount_amount = $price * $discount * 0.01;
    $discount_price = $price - $discount_amount;
    return view('show_calculator', compact(['discount_price', 'discount_amount', 'description', 'price', 'discount','discount1']));
});
Route::get('/dictionary',function(){
    return view('dictionary');
});
Route::post('showText',function (Illuminate\Http\Request $request){
    $Eng=['Dog','Cat','Bird','Chicken','Pig'];
    $Vn=['Chó','Mèo','Chim','Gà','Lợn'];
    $search = $request->search; 
    $result='';
    $count=0;
    for($i=0;$i<count($Eng);$i++){
        if($search==$Eng[$i]){
            $result=$Vn[$i];
            $count++;
        }
    }

    return view('showText',compact(['result']));
});