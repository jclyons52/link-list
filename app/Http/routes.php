<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;
use Jclyons52\PagePreview\PreviewManager;

Route::get('/', function () {
    return view('welcome');
});

Route::get('previews', function(Request $request) {
    $preview = PreviewManager::create()->fetch($request->input('link'));

    // $preview->setViewPath(base_path('resources/views/links'));

    return response()->json(['preview' => $preview->render(), 'json' => $preview->toArray()]);
});