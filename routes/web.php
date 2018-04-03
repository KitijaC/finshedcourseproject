<?php

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
    return view('comp/index')->with(['page' => 'index']);
});

Route::get('/articles', function () {
    return view('comp/articles')->with(['page' => 'articles']);
});

Route::get('/about', function () {
    return view('comp/about')->with(['page' => 'about']);
});

Route::get('/chat', function () {
    return view('comp/chat')->with(['page' => 'chat']);
});

Route::get('/register', function () {
    return view('comp/register')->with(['page' => 'register']);
});

Route::get('/single', function () {
    return view('comp/single')->with(['page' => 'single']);
});

// Route::post('/register', function(Request $request){
//     $rules = [
//         'username' => 'required',
//         'first-name' => 'required',
//         'last-name' => 'required',
//         'password' => 'required | min:8 | same:password2',
//     ];
//     $validation = $request -> validate($rules);
//     dd($validation);

// });

Route::post('/register', 'AccountController@storeUser');

Route::post('/chat/save-message', 'AccountController@saveChatMessage');

Route::get('/chat/chat-messages', 'AccountController@getChatMessages');

