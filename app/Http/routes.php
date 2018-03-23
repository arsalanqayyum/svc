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

Route::get('/allslider',[
    'uses'  => 'admin@allslider',
    'as'    => 'allsliders'
]);
Route::post('/insertslider',[
    'uses'  => 'admin@insertslider',
    'as'    => 'insertslider'
]);

Route::post('/updateslider/{id}',[
    'uses'  => 'admin@updateslider',
    'as'    => 'updateslider'
]);

Route::get('/deleteslider/{id}',[
    'uses'  => 'admin@deleteslider',
    'as'    => 'deleteslider'
]);

Route::get('/allposts',[
    'uses'  => 'admin@allposts',
    'as'    => 'allposts'
]);

Route::get('/add-post',[
    'uses' => 'admin@getcatsonpost',
    'as'  => 'add-post'
]);

Route::get('/edit/{id}',[
    'uses'  => 'admin@editpost',
    'as'    => 'editpost'
]);

Route::post('/insert-post',[
    'uses'  => 'admin@addpost',
    'as'    => 'addpost'
]);

Route::post('/updatepost/{id}',[
    'uses'  => 'admin@updatepost',
    'as'    => 'updatepost'
]);

Route::get('/delete/{id}',[
    'uses'  => 'admin@deletepost',
    'as'    => 'deletepost'
]);

Route::get('/category',[
    'uses'  => 'admin@viewcategory',
    'as'    => 'allcategory'
]);

Route::post('/addcategory',[
    'uses'  => 'admin@addcategory',
    'as'    => 'addcategory'
]);

Route::post('/category/{id}',[
    'uses'  => 'admin@editcategory',
    'as'    => 'editcategory'
]);

Route::get('/deletecategory/{id}',[
    'uses'  => 'admin@deletecategory',
    'as'    => 'deletecategory'
]);

Route::get('filter',[
    'uses'  => 'admin@filter',
    'as'    => 'filter'
]);

Route::get('/allprodcat',[
    'uses'  => 'admin@prodcat',
    'as'    => 'allprodcat'
]);

Route::post('/addprodcat',[
    'uses'  => 'admin@addprodcat',
    'as'    => 'addprodcat'
]);

Route::post('/editprodcat/{id}',[
    'uses'  => 'admin@editallprodcat',
    'as'    => 'editallprodcat'
]);

Route::get('/deleteprodcat/{id}',[
    'uses'  => 'admin@deleteprodcat',
    'as'    => 'deleteprodcat'
]);

Route::get('/allbrands',[
    'uses'  => 'admin@allbrands',
    'as'    => 'allbrands'
]);

Route::post('/addbrands',[
    'uses' => 'admin@addbrand',
    'as'    => 'addbrand'
]);

Route::post('/editbrand/{id}',[
    'uses'  => 'admin@editbrand',
    'as'    => 'editbrand'
]);

Route::get('/deletebrand/{id}',[
    'uses'  => 'admin@deletebrands',
    'as'    => 'deletebrand'
]);

Route::get('/widget',[
    'uses'  => 'admin@allwidget',
    'as'    => 'widget'
]);

Route::post('/widgetupdate1/{id}',[
    'uses'  => 'admin@updatewidget1',
    'as'    => 'updatewidget1'
]);

Route::post('/widgetupdate2/{id}',[
    'uses'  => 'admin@updatewidget2',
    'as'    => 'updatewidget2'
]);

Route::post('/widgetupdate3/{id}',[
    'uses'  => 'admin@updatewidget3',
    'as'    => 'updatewidget3'
]);

Route::post('/widgetupdate4',[
    'uses'  => 'admin@updatewidget4',
    'as'    => 'updatewidget4'
]);

Route::post('/widgetupdate5',[
    'uses'  => 'admin@updatewidget5',
    'as'    => 'updatewidget5'
]);

Route::post('/widgetupdate6',[
    'uses'  => 'admin@updatewidget6',
    'as'    => 'updatewidget6'
]);

Route::post('/widgetupdate7',[
    'uses'  => 'admin@updatewidget7',
    'as'    => 'updatewidget7'
]);

Route::post('/widgetupdate8',[
    'uses'  => 'admin@updatewidget8',
    'as'    => 'updatewidget8'
]);
Route::get('/about-page',[
    'uses'  => 'admin@adminaboutpage',
    'as'    => 'adminaboutpage'
]);

Route::post('/about-page',[
    'uses'  => 'admin@updateaboutpage',
    'as'    => 'updateaboutpage'
]);

Route::auth();
Route::get('/lvl-admin', 'HomeController@index');

Route::get('/about',[
    'uses'  => 'maincontroller@aboutpage',
    'as'    => 'aboutpage'
]);

Route::get('/', function () {
    return view('main');
});
Route::get('/home','maincontroller@indexpost');
Route::get('/','maincontroller@indexpost');
Route::get('/{id}', 'maincontroller@singlepost');
Route::get('/products/{cat}', 'maincontroller@getcat');
Route::get('/prodcat/{cat}', 'maincontroller@getcat');


