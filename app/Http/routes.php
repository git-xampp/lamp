<?php
//路由文件

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/ceshi',CeshiController@index);



//Route::get('ceshi/{id}',function($id){
	//$url=url('fool');
	//dd($url);
	
    //return "ce  shi ";
	
	//return $id;
  
//});

//Route::get('ce/{id}/shi/{name}',function ($id,$name){
//	return $id.$name;
	
//});

//Route::get('ceshi/{name?}',function($name=null){
//	return $name;
	
//});

//Route::get("ceshi/{name?}",function($name="xxoo"){
//	return $name;
	
//});



//Route::get('ceshi/{id}-{name}',function($id,$name){
//	return 	$id.'--'.$name;
	
//})->where('id','[\d]+')->where('name','[A-Za-z]+');
//http://aaa.com/ceshi/22-ww


//Route::get('ceshi/ {id}-{name}', function ($id, $name) {
 //   return $id.'--'.$name;
//})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//ceshi/{id}-{name} http://aaa.com/ceshi/22-ww
//ceshi/{id}/{name} http://aaa.com/ceshi/22/ww
//---------GET  用法-----------// 

// Route::get('/',function (){
		// return "测试";
	
// });

//-----------POST  用法----------//
//--1--//



//--2--//

// Route::match (['get','post'],'/',function(){
	
	// return "aaaa";
// });

// Route::get('/a',function(){
	
	// return "wwwww";
// });


 Route::get('/a','AdminController@xxoo');

