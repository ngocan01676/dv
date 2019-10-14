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
use App\Theloai;
use App\User;

Route::get('/', function () {
  return view('welcome');
});
Route::get('thu',function()
{

$theloai =User::find(1);
foreach ($theloai->comment as $loaitin)  {
	echo $loaitin->NoiDung."<br/>";
}

 
});
Route::get('admin/dangnhap','Usercontroller@getdangnhapAdmin');
Route::post('admin/dangnhap','Usercontroller@postdangnhapAdmin');
Route::get('admin/dangxuat','Usercontroller@getdangxuat');
Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){
 Route::group(['prefix'=>'theloai'],function(){
  Route::get('danhsach','Theloaicontroller@getdanhsach');
  Route::get('sua/{id}','Theloaicontroller@getsua');
  Route::post('sua/{id}','Theloaicontroller@postsua');
  Route::get('them','Theloaicontroller@getthem');
  Route::post('them','Theloaicontroller@postthem');
  Route::get('xoa/{id}','Theloaicontroller@getxoa');
});
 Route::group(['prefix'=>'loaitin'],function(){
  Route::get('danhsach','Loaitincontroller@getdanhsach');
  Route::get('sua/{id}','Loaitincontroller@getsua');
  Route::post('sua/{id}','Loaitincontroller@postsua');
  Route::get('them','Loaitincontroller@getthem');
  Route::post('them','Loaitincontroller@postthem');
  Route::get('xoa/{id}','Loaitincontroller@getxoa');
});
 Route::group(['prefix'=>'tintuc'],function(){
  Route::get('danhsach','Tintuccontroller@getdanhsach');
  Route::get('sua/{id}','Tintuccontroller@getsua');
  Route::get('sua/{id}','Tintuccontroller@getsua');
  Route::get('them','Tintuccontroller@getthem');
  Route::post('them','Tintuccontroller@postthem');
  Route::get('xoa/{id}','Tintuccontroller@getxoa');
});
 Route::group(['prefix'=>'slide'],function(){
  Route::get('danhsach','Slidercontroller@getdanhsach');
  Route::get('home','Slidercontroller@home');
  Route::get('sua/{id}','Slidercontroller@getsua');
  Route::get('sua/{id}','Slidercontroller@getsua');
  Route::get('them','Slidercontroller@getthem');
  Route::post('them','Slidercontroller@postthem');
  Route::get('xoa/{id}','Slidercontroller@getxoa');
});
  Route::group(['prefix'=>'front'],function(){
  Route::get('danhsach','Pagecontroller@getdanhsach');
  Route::get('message','Pagecontroller@getmessage');

});
  Route::group(['prefix'=>'khoa'],function(){
  Route::get('danhsach','Khoacontroller@getdanhsach');
  Route::get('sua/{id}','Khoacontroller@getsua');
  Route::get('sua/{id}','Khoacontroller@getsua');
  Route::get('them','Khoacontroller@getthem');
  Route::post('them','Khoacontroller@postthem');
  Route::get('xoa/{id}','Khoacontroller@getxoa');
});
    Route::group(['prefix'=>'bacsi'],function(){
  Route::get('danhsach','Bacsicontroller@getdanhsach');
  Route::get('sua/{id}','Bacsicontroller@getsua');
  Route::get('sua/{id}','Bacsicontroller@getsua');
  Route::get('them','Bacsicontroller@getthem');
  Route::post('them','Bacsicontroller@postthem');
  Route::get('xoa/{id}','Bacsicontroller@getxoa');
});
 Route::group(['prefix'=>'user'],function(){
  Route::get('danhsach','Usercontroller@getdanhsach');
  Route::get('sua/{id}','Usercontroller@getsua');
  Route::get('sua/{id}','Usercontroller@getsua');
  Route::get('them','Usercontroller@getthem');
  Route::post('them','Usercontroller@postthem');
  Route::get('xoa/{id}','Usercontroller@getxoa');
});
 Route::group(['prefix'=>'comment'],function()
 {
  Route::get('xoa/{id}','Commentcontroller@getxoa');
});
 Route::group(['prefix'=>'ajax'],function(){
   Route::get('loaitin/{idtheloai}','Ajaxcontroller@getloaitin');
 });

});
Route::get('trangchu','Pagecontroller@trangchu');
Route::post('message','Pagecontroller@postmessage');
Route::get('home','Pagecontroller@home');
Route::get('lienhe','Pagecontroller@lienhe');
Route::get('loaitin/{id}','Pagecontroller@loaitin');
Route::get('tintuc/{id}','Pagecontroller@tintuc');
Route::get('dangnhap','Pagecontroller@getdangnhap');
Route::post('dangnhap','Pagecontroller@postdangnhap');
Route::get('dangxuat',['as'=>'dangxuat','uses'=>'Pagecontroller@dangxuat']);
Route::post('getcomment','Pagecontroller@postcmt');

