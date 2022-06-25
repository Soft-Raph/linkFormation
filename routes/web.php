<?php

use Illuminate\Http\Request;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    $links = \App\Models\Link::all();

    return view('welcome', ['links'=>$links]);
//    return view('welcome', compact('links'));
//    return view('welcome')->withLinks($links);
//    return view('welcome')->with('links', $links);
});
Route::post('/submit', function (Request $request) {
    $data = $request->validator([
        'title'=>'required|max:225',
        'url'=>'required|url|max:225',
        'description'=>'required|max:225',
    ]);
//    $link = tap(new \App\Models\Link($data))->save();
//    return $link;
    $link = new \App\Models\Link();
    $link->title = $data['title'];
    $link->url = $data['url'];
    $link->description = $data['description'];
    $link->save();

    return $link;
});
