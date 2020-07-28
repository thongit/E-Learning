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

// Route::get('/', function () {
//     return view('index');
// });


// Route::get('/chi-tiet-khoa-hoc', function () {
//     return view('KhoaHoc.chi-tiet-khoa-hoc');
// });

Route::get('giang-vien','KhoaHocController@getGiangVien');

Route::get('/thong-tin-giang-vien', function () {
    return view('thong-tin-giang-vien');
});

Route::get('dang-nhap', function () {
    return view('login-2');
});

Route::get('thanh-toan', function () {
    return view('thanh-toan');
});

Route::get('giang-vien/quan-ly-don-hang','NguoiDungController@getQuanLyDonHang');

Route::get('giang-vien/quan-ly-don-hang/{id}', 'NguoiDungController@quanLyDonHangUpdate')->name('DonHangUpdate');


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

Route::get('/ds-hoc-vien', function () {
    return view('ds-hoc-vien');
});

Route::get('/ds-giang-vien', function () {
    return view('ds-giang-vien');
});

Route::get('/kich-hoat-khoa-hoc', function () {
    return view('kich-hoat-khoa-hoc');
});

// Route::get('/them-cau-hoi', function () {
//     return view('them-cau-hoi');
// })->name('them-cau-hoi');

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

Route::get('/gioi-thieu', function () {
    return view('gioi-thieu');
});

Route::get('/trang-ca-nhan', function () {
    return view('trang-ca-nhan');
});

Route::get('tro-thanh-giang-vien','NguoiDungController@getDangKyGiangVien');

Route::post('tro-thanh-giang-vien','NguoiDungController@postTroThanhGiangVien')->name('thanh-giang-vien');

Route::post('tro-thanh-to-chuc','NguoiDungController@postTroThanhToChuc')->name('thanh-to-chuc');


Route::get('admin/ds-hoc-vien','AdminController@getHocVien');

Route::get('admin/khoa-hoc/{id}','AdminController@getChuong')->name('lay-chuong');

Route::get('admin/ds-giang-vien','AdminController@getGiangVien');

Route::get('admin/ds-admin','AdminController@getAdmin');

Route::get('admin/ds-khoa-hoc','AdminController@getKhoaHoc');

Route::get('admin/ds-khoa-hoc-chua-duyet','AdminController@getKhoaHocChuaDuyet');

Route::get('admin/ds-khoa-hoc-da-duyet','AdminController@getKhoaHocDaDuyet');

Route::get('admin/ds-khoa-hoc/{id}', 'AdminController@completedUpdate')->name('completedUpdate');

Route::get('admin/thong-ke','AdminController@getThongKe');

Route::get('khoa-hoc/ds-khoa-hoc-da-tao/{id}', 'AdminController@khoaHocUpdate')->name('khoaHocUpdate');

Route::get('khoa-hoc/ds-khoa-hoc-da-tao','KhoaHocController@getDanhSachKhoaHoc');
Route::get('khoa-hoc/tao-mo-ta-khoa-hoc','KhoaHocController@getTaoMoTaKhoaHoc');
Route::post('khoa-hoc/tao-mo-ta-khoa-hoc','KhoaHocController@postTaoMoTaKhoaHoc');

Route::get('khoa-hoc/tao-chuong-cho-khoa-hoc/{idKhoahoc}','KhoaHocController@getTaoChuongChoKhoaHoc');
Route::post('khoa-hoc/tao-chuong-cho-khoa-hoc/{idKhoahoc}','KhoaHocController@postTaoChuongChoKhoaHoc')->name('xl-tao-chuong');

Route::get('khoa-hoc/tao-bai-giang-cho-chuong/{idKhoahoc}','KhoaHocController@getTaoBaiGiangChoChuong');
Route::post('khoa-hoc/tao-bai-giang-cho-chuong/{idKhoahoc}','KhoaHocController@postTaoBaiGiangChoChuong')->name('xl-tao-bai-giang');

Route::get('khoa-hoc/xoa/{idKhoahoc}','CMSController@getXoaKhoahoc');
Route::get('khoa-hoc/sua/{idKhoahoc}','CMSController@getSuaKhoaHoc');
Route::post('khoa-hoc/sua/{idKhoahoc}','CMSController@postSuaKhoaHoc');

Route::get('khoa-hoc/xoa-chuong/{idChuong}','CMSController@getXoaChuong');
Route::get('khoa-hoc/sua-chuong/{idChuong}','CMSController@getSuaChuong');
Route::post('khoa-hoc/sua-chuong/{idChuong}','CMSController@postSuaChuong');

Route::get('khoa-hoc/xoa-bai-giang/{idBaiGiang}','CMSController@getXoaBaiGiang');
Route::get('khoa-hoc/sua-bai-giang/{idBaiGiang}','CMSController@getSuaBaiGiang');
Route::post('khoa-hoc/sua-bai-giang/{idBaiGiang}','CMSController@postSuaBaiGiang');

Route::get('linh-vuc/{id}','KhoaHocController@getLinhVuc');

Route::get('quen-mat-khau', function () {
    return view('quen-mat-khau');
});


Route::name('trang-chu.')->group(function(){
    //trang chủ
    Route::get('/', 'KhoaHocController@index')->name('index');
    //trang khóa học
    Route::get('khoa-hoc', 'KhoaHocController@hienThiKhoaHoc')->name('khoa-hoc');
    //Hiển thị tìm kiếm
    Route::get('tim-kiem', 'KhoaHocController@timKiem')->name('xu-ly-tim-kiem');
    //Hiển thị tìm kiếm nâng cao
    Route::get('tim-kiem-nc', 'KhoaHocController@timKiemNangCao')->name('xu-ly-tim-kiem-nc');
    //Hiển thị chi tiết khóa  học
    Route::get('khoa-hoc/{id}', 'KhoaHocController@hienThiChiTietKhoaHoc')->name('chi-tiet-khoa-hoc');
});
Route::post('khoa-hoc/danh-gia/{id}', 'KhoaHocController@xuLyDanhGia')->name('xu-ly-danh-gia');


// Route::get('trac-nghiem','GhiFileXmlController@docDuLieu')->name('trac-nghiem');
// Route::post('ghi-file','GhiFileXmlController@ghiDuLieu')->name('ghi-file');

Route::get('trac-nghiem-excel/{tenFile}','ExportFileExcelController@docDuLieu')->name('trac-nghiem-excel');
Route::get('/them-cau-hoi-excel/{id}','ExportFileExcelController@index')->name('them-cau-hoi-excel');
Route::post('export', 'ExportFileExcelController@export')->name('export');


Route::get('trac-nghiem','GhiFileXmlController@docDuLieu')->name('trac-nghiem');
Route::post('ghi-file','GhiFileXmlController@ghiDuLieu')->name('ghi-file');
Route::post('lam-lai','ExportFileExcelController@destroy')->name('lam-lai');
Route::post('luu-ket-qua','ExportFileExcelController@luuBaiLam')->name('luu-ket-qua');

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
