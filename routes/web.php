<?php

use App\Place;

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

Route::get('/', function () {
    $mapOption = 1;
    // if({{session()->get('locale')}} == "en")
    $places = Place::where("title_id", session()->get('locale'))->get();
    // echo $places;

    return view('pages/welcome', compact('mapOption', 'places'));
});
Route::get('/{mapOption}', function ($mapOption) {
    $places = Place::where("title_id", session()->get('locale'))->get();
    // echo $places;

    return view('pages/welcome', compact('mapOption', 'places'));
});

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);

    return redirect()->back();
});
