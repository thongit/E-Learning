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
    return view('index');
});


Route::get('/khoa-hoc', function () {
    return view('khoa-hoc');
});

Route::get('/chi-tiet-khoa-hoc', function () {
    return view('chi-tiet-khoa-hoc');
});

Route::get('/giang-vien', function () {
    return view('giang-vien');
});

Route::get('/thong-tin-giang-vien', function () {
    return view('thong-tin-giang-vien');
});

Route::get('dang-nhap', function () {
    return view('login-2');
});

Route::get('dang-ky', function () {
    return view('register');
});

Route::get('/doi-mat-khau', function () {
    return view('doi-mat-khau');
});

Route::get('/lien-he', function () {
    return view('lien-he');
});

Route::get('/khoa-hoc-cua-toi', function () {
    return view('khoa-hoc-cua-toi');
});

Route::get('/thong-tin-ca-nhan', function () {
    return view('thong-tin-ca-nhan');
});

Route::get('/login-admin', function () {
    return view('login-admin');
});

Route::get('/ds-linh-vuc', function () {
    return view('ds-linh-vuc');
});

Route::get('/thong-ke', function () {
    return view('thong-ke');
});

Route::get('/ds-hoc-vien', function () {
    return view('ds-hoc-vien');
});

Route::get('/ds-giang-vien', function () {
    return view('ds-giang-vien');
});

Route::get('/kich-hoat-khoa-hoc', function () {
    return view('kich-hoat-khoa-hoc');
});

Route::get('/them-cau-hoi', function () {
    return view('them-cau-hoi');
})->name('them-cau-hoi');

Route::get('/ds-khoa-hoc-da-tao', function () {
    return view('ds-khoa-hoc-da-tao');
});

Route::get('/tao-bai-giang-cho-chuong', function () {
    return view('tao-bai-giang-cho-chuong');
});
Route::get('/tao-mo-ta-khoa-hoc', function () {
    return view('tao-mo-ta-khoa-hoc');
});

Route::get('/tao-chuong-cho-khoa-hoc', function () {
    return view('tao-chuong-cho-khoa-hoc');
});

Route::get('/tao-bai-trac-nghiem', function () {
    return view('tao-bai-trac-nghiem');
});

Route::get('/sua-mo-ta-khoa-hoc', function () {
    return view('sua-mo-ta-khoa-hoc');
});

Route::get('/sua-chuong-khoa-hoc', function () {
    return view('sua-chuong-khoa-hoc');
});

Route::get('/sua-bai-giang-khoa-hoc', function () {
    return view('sua-bai-giang-khoa-hoc');
});

Route::get('/quen-mat-khau', function () {
    return view('quen-mat-khau');
});

Route::get('/gioi-thieu', function () {
    return view('gioi-thieu');
});
Route::get('/trang-ca-nhan', function () {
    return view('trang-ca-nhan');
});

Route::get('trac-nghiem','GhiFileXmlController@docDuLieu')->name('trac-nghiem');
Route::post('ghi-file','GhiFileXmlController@ghiDuLieu')->name('ghi-file');
Route::get('login-2','NguoiDungController@dangNhap')->name('dang-nhap');
Route::post('login-2','NguoiDungController@xuLyDangNhap')->name('xu-ly-dang-nhap');
Route::get('dang-xuat','NguoiDungController@logout')->name('dang-xuat');
Route::get('register','NguoiDungController@dangKy')->name('dang-ky');
Route::post('register','NguoiDungController@xuLyDangKy')->name('xu-ly-dang-ky');
Route::get('trang-ca-nhan','NguoiDungController@getSua')->name('sua');
Route::post('trang-ca-nhan','NguoiDungController@postSua')->name('xu-ly-sua');
// Route::get('quen-mat-khau','NguoiDungController@quenMatKhau')->name('quen-mat-khau');
// Route::post('trang-ca-nhan','NguoiDungController@xuLyQuenMatKhau')->name('xu-ly-quen-mat-khau');doiMatKhau
Route::post('mail/send','NguoiDungController@xuLyQuenMatKhau')->name('xu-ly-quen-mat-khau');
Route::get('doi-mat-khau','NguoiDungController@doiMatKhau')->name('doi-mat-khau');
Route::post('doi-mat-khau','NguoiDungController@xuLyDoiMatKhau')->name('xu-ly-doi-mat-khau');
?>