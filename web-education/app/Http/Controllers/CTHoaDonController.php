<?php

namespace App\Http\Controllers;
use App\cthoadon;
use App\khoahoc;
use App\hoadon;
use App\nguoidung;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ThongBaoKichHoatKhoaHocThanhCong;
use App\Mail\ThanhToanVNP;


class CTHoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hienthiKichHoat()
    {
        return view('kich-hoat-khoa-hoc');
    }

    public function postKichHoatKhoaHoc(Request $request)
    {
        $nguoidung=nguoidung::find(auth()->user()->id);
        $maKichHoat = cthoadon::where('ma_kich_hoat','=' ,$request->nhap_ma)->first();

        if($maKichHoat == null)
        {
            return redirect('kich-hoat-khoa-hoc')->with('error', 'Mã kích hoạt sai');
        }
        else
        {
            $updateTrangThai = cthoadon::where('ma_kich_hoat','=',$maKichHoat->ma_kich_hoat)->first();
            $updateTrangThai->trang_thai = 2;
            $updateTrangThai->save();
            $hd = hoadon::find($updateTrangThai->hoa_don_id);
            $hd->trang_thai = 3;
            $hd->save();
            Mail::to($nguoidung->email)->send(new ThongBaoKichHoatKhoaHocThanhCong($nguoidung->email));
            return redirect('/khoa-hoc/'.$updateTrangThai->khoa_hoc_id)->with('success', 'Bạn đã Kích hoạt khóa học thành công!');
        }
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function thanhToan($id)
    {
        $khoaHoc = khoahoc::where([['id','=',$id],['trang_thai','=',3],])->first();
        if($khoaHoc == null)
        {
            abort(404);
        }
        foreach($khoaHoc->ctHoaDon as $dshv)
        {
            if($dshv->hoaDon->nguoiDung->id == auth()->user()->id && ($dshv->hoaDon->trang_thai == 3 || $dshv->trang_thai == 2))
            {
                return redirect('/khoa-hoc/'.$khoaHoc->id)->with('damua' ,'Bạn đã mua khóa học này!');
            }
            else if ($dshv->hoaDon->nguoiDung->id == auth()->user()->id)
            {
                return redirect('/ds-don-hang')->with('warning' ,'Bạn đã mua khóa học này! Vui lòng chờ giao hàng.');
            }
        }
        return view('thanh-toan',compact('khoaHoc'));
    }

    public function create(Request $request)
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        substr(str_shuffle($permitted_chars), 0, 6);
        $kh = khoahoc::find($request->khoaHocID);
        $makh = auth()->user()->id.$request->khoaHocID.substr(str_shuffle($permitted_chars), 0, 6);
        if($request->thanhtoan == "thuong")
        {
            $hd = new hoadon;
            $hd->tong_tien = $kh->gia;
            $hd->nguoi_dung_id = auth()->user()->id;
            $hd->dia_chi = $request->DiaChi;
            $hd->trang_thai = 1;
            $hd->loai_thanh_toan = 1;
            $hd->save();
            $cthd = new cthoadon;
            $cthd->khoa_hoc_id = $request->khoaHocID;
            $cthd->hoa_don_id = $hd->id;
            $cthd->ma_kich_hoat = $makh;
            $cthd->trang_thai = 1;
            $cthd->tien_do = $kh->Chuong[0]->id.'_0';
            $cthd->save();
            return redirect('/')->with('success','Đặt mua thành công! Chờ nhận mã và nhập mã vào trang kích hoạt mã');
        }
        else
        {
            $hd = new hoadon;
            $hd->tong_tien = $kh->gia;
            $hd->nguoi_dung_id = auth()->user()->id;
            $hd->dia_chi = $request->DiaChi;
            $hd->loai_thanh_toan = 2;
            $hd->trang_thai = 1;
            $hd->save();
            $cthd = new cthoadon;
            $cthd->khoa_hoc_id = $request->khoaHocID;
            $cthd->hoa_don_id = $hd->id;
            $cthd->ma_kich_hoat = $makh;
            $cthd->trang_thai = 1;
            $cthd->tien_do = $kh->Chuong[0]->id.'_'.$kh->Chuong[0]->noiDung[0]->id;
            $cthd->save();
            session(['cost_id' => $request->id]);
            session(['url_prev' => url()->previous()]);
            $vnp_TmnCode = "182NL75Y"; //Mã website tại VNPAY 
            $vnp_HashSecret = "WLBTTRLXJYGGZQIIKAGNUFGNKEUDLYCZ"; //Chuỗi bí mật
            $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://localhost:8000/return-vnpay";
            $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $request->amount * 100;
            $vnp_Locale = 'vn';
            $vnp_IpAddr = request()->ip();

            $inputData = array(
                "vnp_Version" => "2.0.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
            );

            if ($request->input('BankCode')) {
                $inputData['vnp_BankCode'] = $request->input('BankCode');
            }
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . $key . "=" . $value;
                } else {
                    $hashdata .= $key . "=" . $value;
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
                $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
                $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
            }
            return redirect($vnp_Url);
        }
    }

    public function return(Request $request)
    {
        $url = session('url_prev','/');
        $nd = nguoidung::find(auth()->user()->id);
        foreach($nd->hoaDon as $ct)
        {
            $kiemtra = $ct;
        }
        $hoaDon = hoadon::find($kiemtra->id);
        $ctHoaDon = cthoadon::find($kiemtra->ctHoaDon[0]->id);
        if($request->vnp_ResponseCode == "00") {
            $hoaDon->trang_thai = 3;
            $hoaDon->save();
            $ctHoaDon->trang_thai = 2;
            $ctHoaDon->save();
            $u = '/khoa-hoc/'.$ctHoaDon->khoa_hoc_id;
            Mail::to($nd->email)->send(new ThanhToanVNP($nd->email));
            return redirect($u)->with('success' ,'Đã thanh toán phí dịch vụ');
            
        }
        $ctHoaDon->delete();
        $hoaDon->delete();
        session()->forget('url_prev');
        return redirect($url)->with('error' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
}
