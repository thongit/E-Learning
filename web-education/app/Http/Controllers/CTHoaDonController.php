<?php

namespace App\Http\Controllers;
use App\cthoadon;
use Illuminate\Http\Request;

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
            return redirect('kich-hoat-khoa-hoc')->with('success', 'Bạn đã Kích hoạt khóa học thành công!');
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
    public function create()
    {
        //
    }

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
}
