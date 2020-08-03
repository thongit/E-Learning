<?php
Route::get('download/file-huong-dan', 'DownloadsController@downloadhd');
Route::middleware('auth')->group(function(){
    Route::get('admin/ds-giang-vien-ca-nhan','AdminController@getGiangVienCaNhan')->name('admin-ds-giang-vien-ca-nhan');

    Route::get('admin/ds-giang-vien-ca-nhan/{id}','AdminController@postGiangVienCaNhan')->name('admin-duyet-giang-vien-ca-nhan');

    Route::get('admin/ds-giang-vien-to-chuc','AdminController@getGiangVienToChuc')->name('admin-ds-giang-vien-to-chuc');

    Route::get('admin/ds-giang-vien-to-chuc/{id}','AdminController@postGiangVienToChuc')->name('admin-duyet-giang-vien-to-chuc');

    Route::get('admin/ds-hoc-vien','AdminController@getHocVien')->name('admin-ds-hoc-vien');

    Route::get('admin/chuong/{id}','AdminController@getChuong')->name('lay-chuong');

    Route::get('admin/bai-giang/{id}','AdminController@getBaiGiang')->name('lay-bai-giang');

    Route::get('admin/ds-giang-vien','AdminController@getGiangVien')->name('admin-ds-giang-vien');

    Route::get('admin/ds-admin','AdminController@getAdmin')->name('ds-admin');

    Route::get('admin/ds-khoa-hoc','AdminController@getKhoaHoc')->name('admin-ds-khoa-hoc');

    Route::get('admin/ds-khoa-hoc-chua-duyet','AdminController@getKhoaHocChuaDuyet')->name('admin-ds-khoa-hoc-chua-duyet');

    Route::get('admin/ds-khoa-hoc-da-duyet','AdminController@getKhoaHocDaDuyet')->name('admin-ds-khoa-hoc-da-duyet');

    Route::get('admin/ds-khoa-hoc/{id}', 'AdminController@completedUpdate')->name('completedUpdate');

    Route::get('admin/thong-ke','AdminController@getThongKe')->name('admin-thong-ke');

    Route::get('khoa-hoc/ds-khoa-hoc-da-tao/{id}', 'AdminController@khoaHocUpdate')->name('khoaHocUpdate');

    Route::get('khoa-hoc/ds-khoa-hoc-da-tao','KhoaHocController@getDanhSachKhoaHoc')->name('dskhdt');

    Route::get('khoa-hoc/quan-ly-bai-kiem-tra/{id}','KhoaHocController@getBaiKiemTra')->name('ql-bai-kt');

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

    Route::get('them-cau-hoi-xml/{id}','GhiFileXmlController@index')->name('them-cau-hoi-xml');

    Route::get('trac-nghiem-xml/{tenFile}','GhiFileXmlController@docDuLieu')->name('trac-nghiem-xml');

    Route::post('ghi-file','GhiFileXmlController@ghiDuLieu')->name('ghi-file');

    Route::post('lam-lai','ExportFileExcelController@destroy')->name('lam-lai');

    Route::get('xoa-bai-kt/{id}','ExportFileExcelController@xoabaikt')->name('xoa-bai-kt');

    Route::post('luu-ket-qua','ExportFileExcelController@luuBaiLam')->name('luu-ket-qua');

    Route::get('trac-nghiem-excel/{tenFile}','ExportFileExcelController@docDuLieu')->name('trac-nghiem-excel');

    Route::get('/them-cau-hoi-excel/{id}','ExportFileExcelController@index')->name('them-cau-hoi-excel');

    Route::post('export', 'ExportFileExcelController@export')->name('export');

    Route::get('/sua-cau-hoi-excel/{id}','ExportFileExcelController@suaCauHoi')->name('sua-cau-hoi-excel');

    Route::post('sua-cau-hoi', 'ExportFileExcelController@edit')->name('sua-cau-hoi');

    Route::get('trang-ca-nhan','NguoiDungController@getSua')->name('sua');

    Route::post('trang-ca-nhan','NguoiDungController@postSua')->name('xu-ly-sua');

    Route::get('dang-xuat','NguoiDungController@logout')->name('dang-xuat');

    Route::get('khoa-hoc/video/{id}', 'KhoaHocController@video')->name('video');

    Route::post('khoa-hoc/danh-gia/{id}', 'KhoaHocController@xuLyDanhGia')->name('xu-ly-danh-gia');

    Route::post('khoa-hoc/video/{id}', 'KhoaHocController@xuLyBinhLuan')->name('xu-ly-binh-luan');

    Route::get('giang-vien/quan-ly-don-hang','NguoiDungController@getQuanLyDonHang');
    Route::get('giang-vien/thong-ke/{idKhoaHoc}','NguoiDungController@getThongKeKhoaHoc')->name('thong-ke-khoa-hoc');

    Route::get('giang-vien/quan-ly-don-hang/{id}', 'NguoiDungController@quanLyDonHangUpdate')->name('DonHangUpdate');

    Route::get('tro-thanh-giang-vien','NguoiDungController@getDangKyGiangVien')->name('tro-thanh-giang-vien');

    Route::post('tro-thanh-giang-vien','NguoiDungController@postTroThanhGiangVien')->name('thanh-giang-vien');

    Route::post('tro-thanh-to-chuc','NguoiDungController@postTroThanhToChuc')->name('thanh-to-chuc');

    Route::get('admin/thong-ke','AdminController@getThongKe')->name('thong-ke');

    Route::get('admin/thong-ke-doanh-thu','AdminController@thongKeDoanhThuKH');

    Route::get('admin/thong-ke-doanh-thu-kh','AdminController@thongKeDoanhThuKHMD');

    Route::get('admin/thong-ke-doanh-thu-kh/{id}','AdminController@thongKeDoanhThuKH');

    Route::get('/download/{id}', 'DownloadsController@download')->name('download');

    Route::get('/export-file/{id}', 'DownloadsController@export')->name('export-file');

    Route::get('kich-hoat-khoa-hoc','CTHoaDonController@hienThiKichHoat')->name('form-kich-hoat');

    Route::post('kich-hoat-khoa-hoc','CTHoaDonController@postKichHoatKhoaHoc')->name('xu-ly-kich-hoat-kh');

    Route::get('thanh-toan/{id}','CTHoaDonController@thanhToan')->name('thanh-toan');

    Route::post('xu-ly-thanh-toan','CTHoaDonController@create')->name('xl-thanh-toan');

    Route::get('return-vnpay','CTHoaDonController@return')->name('return-pay');


});

Route::get('giang-vien','KhoaHocController@getGiangVien');

Route::get('giang-vien/{id}', 'KhoaHocController@chiTietGiangVien')->name('chi-tiet-giang-vien');

Route::get('thong-tin-giang-vien', function () {
    return view('thong-tin-giang-vien');
});

Route::get('/lien-he', function () {
    return view('lien-he');
});

Route::get('/thong-tin-ca-nhan', function () {
    return view('thong-tin-ca-nhan');
});

Route::get('/gioi-thieu', function () {
    return view('gioi-thieu');
});

//Xử lý khóa học của tôi
Route::get('/khoa-hoc-cua-toi', 'NguoiDungController@khoaHocCuaToi')->name('khoa-hoc-cua-toi');

//Danh sách các đơn hàng
Route::get('/ds-don-hang', 'NguoiDungController@quanLyDonHang')->name('ds-don-hang');


Route::get('linh-vuc/{id}','KhoaHocController@getLinhVuc')->name('linh-vuc');

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

Route::get('dang-nhap','NguoiDungController@dangNhap')->name('dang-nhap');

Route::post('dang-nhap','NguoiDungController@xuLyDangNhap')->name('xu-ly-dang-nhap');

Route::get('dang-ky','NguoiDungController@dangKy')->name('dang-ky');

Route::post('dang-ky','NguoiDungController@xuLyDangKy')->name('xu-ly-dang-ky');

Route::post('mail/send','NguoiDungController@xuLyQuenMatKhau')->name('xu-ly-quen-mat-khau');

Route::get('doi-mat-khau','NguoiDungController@doiMatKhau')->name('doi-mat-khau');

Route::get('thong-tin-ca-nhan','NguoiDungController@getSua')->name('sua');

Route::post('thong-tin-ca-nhan','NguoiDungController@postSua')->name('xu-ly-sua');

Route::post('doi-mat-khau','NguoiDungController@xuLyDoiMatKhau')->name('xu-ly-doi-mat-khau');

Route::post('trang-ca-nhan','NguoiDungController@xuLyDoiMatKhauTrangCaNhan')->name('xu-ly-doi-mat-khau-trang-ca-nhan');

Route::post('trang-ca-nhan1','NguoiDungController@xuLyThemTaiKhoan')->name('xu-ly-them-tk');

?>
