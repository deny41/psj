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


// Route::group(['middleware' => 'guest'], function () {
   Route::get('/', 'welcomeController@data_all')->name('data_all');
   Route::post('login', 'Auth\loginController@authenticate');
   //FRONT END
   Route::get('/profile/{name}', 'novel_frontend\profileController@profile')->name('profile_frontend');
   // Route::get('/book/{name}', 'frontend_controller\bookController@profile')->name('frontend_book');

   // FRONT END NOVEL
   Route::get('/book/{name}', 'novel_frontend\bookController@book')->name('frontend_book');
   Route::get('/novel_rate_star', 'novel_frontend\bookController@novel_rate_star')->name('novel_rate_star');
   Route::get('/novel_rate_reply', 'novel_frontend\bookController@novel_rate_reply')->name('novel_rate_reply');
   Route::get('/chapter/{name}', 'novel_frontend\chapterController@chapter')->name('frontend_chapter');
   Route::get('/subsibe/', 'novel_frontend\chapterController@chapter')->name('subsibe_novel');
   //BACKEND 

 // });

Auth::routes();

// Route::group(['middleware' => 'auth'], function () {
//HOME
   Route::get('/home', 'HomeController@index')->name('home');
   Route::get('/verify/{token}/{id}', 'backend\mail\verifyController@verify');
   Route::get('/profile_detail/{id}', 'backend_controller\profileController@profile')->name('profile_backend');


//MASTER
   Route::get('/master/master_user', 'backend\master\master_userController@index')->name('master_user');
   Route::get('/master/master_user/create', 'backend\master\master_userController@create')->name('master_user_create');
   Route::get('/master/master_user/save', 'backend\master\master_userController@save')->name('master_user_save');
   Route::get('/master/master_user/edit/{id}', 'backend\master\master_userController@edit')->name('master_user_edit');
   Route::get('/master/master_user/update/{id}', 'backend\master\master_userController@update')->name('master_user_update');
   Route::get('/master/master_user/delete/{id}', 'backend\master\master_userController@delete')->name('master_user_delete');

   Route::get('/editor/approve_novel', 'backend\editor\approve_novelController@index')->name('approve_novel');
   Route::get('/editor/approve_novel/edit/{id}', 'backend\editor\approve_novelController@edit')->name('approve_novel_edit');
   Route::post('/editor/approve_novel/update', 'backend\editor\approve_novelController@update')->name('approve_novel_update');
   Route::get('/editor/approve_novel/delete/{id}', 'backend\editor\approve_novelController@delete')->name('approve_novel_delete');
   Route::get('/editor/approve_novel/official/{id}', 'backend\editor\approve_novelController@official')->name('approve_novel_official');

   Route::get('/editor/approve_chapter', 'backend\editor\approve_chapterController@index')->name('approve_chapter');
   Route::get('/editor/approve_chapter/edit/{id}', 'backend\editor\approve_chapterController@edit')->name('approve_chapter_edit');
   Route::get('/editor/approve_chapter/update/{id}', 'backend\editor\approve_chapterController@update')->name('approve_chapter_update');
   Route::get('/editor/approve_chapter/delete/{id}', 'backend\editor\approve_chapterController@delete')->name('approve_chapter_delete');

   Route::get('/write/write_novel', 'write\write_novelController@index')->name('write_novel');
   Route::get('/write/write_novel/create', 'write\write_novelController@create')->name('write_novel_create');
   Route::post('/write/write_novel/save', 'write\write_novelController@save')->name('write_novel_save');
   Route::get('/write/write_novel/edit/{id}', 'write\write_novelController@edit')->name('write_novel_edit');
   Route::post('/write/write_novel/update/{id}', 'write\write_novelController@update')->name('write_novel_update');
   Route::get('/write/write_novel/delete/{id}', 'write\write_novelController@delete')->name('setting_novel_delete');

   Route::get('/write/write_chapter/{id}', 'write\write_chapterController@index')->name('write_chapter');
   Route::get('/write/write_chapter/create/{id}', 'write\write_chapterController@create')->name('write_chapter_create');
   Route::get('/write/write_chapter/save/{id}', 'write\write_chapterController@save')->name('write_chapter_save');
   Route::get('/write/write_chapter/edit/{id}', 'write\write_chapterController@edit')->name('write_chapter_edit');
   Route::get('/write/write_chapter/update/{id}', 'write\write_chapterController@update')->name('write_chapter_update');
   Route::get('/write/write_chapter/delete/{id}', 'write\write_chapterController@delete')->name('setting_chapter_delete');
// });






