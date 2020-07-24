<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khoahoc;
use App\linhvuc;

class KhoaHocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLinhVuc = linhvuc::all();
        $dsKhoaHoc = khoahoc::whereIn('id',[1,2,3,4,5,6])->get();
        return view('index', compact('dsKhoaHoc','dsLinhVuc'));
    }

    public function hienThiKhoaHoc()
    {
        $dsKhoaHoc = khoahoc::all();
        $dsLinhVuc = linhvuc::all();
        return view('KhoaHoc.khoa-hoc', compact('dsKhoaHoc','dsLinhVuc'));
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

    public function timKiem(Request $request)
    {
        //$dsSanPham = SanPham::paginate(12);
        $dsLinhVuc = linhvuc::all();
        $dsKhoaHoc = khoahoc::where('ten_khoa_hoc', 'like', '%'.$request->key_word_tenkh.'%')->get();
        if(sizeOf($dsKhoaHoc) <= 0)
        {
            return abort(404);
        }
       return view('tim-kiem', compact('dsKhoaHoc','dsLinhVuc'));
    }

    // public function timKiemMucDo(Request $request)
    // {
    //     //$dsSanPham = SanPham::paginate(12);
    //     $dsLinhVuc = linhvuc::all();

    //     $dsKhoaHoc = khoahoc::where('muc_do', 'like', '%'.$request->tk_trung_cap.'%')
    //                             ->where('muc_do', 'like', '%'.$request->tk_so_cap.'%')
    //                             ->where('muc_do', 'like', '%'.$request->tk_chuyen_sau.'%')
    //     ->get();
    //     if(sizeOf($dsKhoaHoc) <= 0)
    //     {
    //         return abort(404);
    //     }
    //    return view('tim-kiem', compact('dsKhoaHoc','dsLinhVuc'));
    // }


    public function timKiemNangCao(Request $request)
    {
        $dsLinhVuc = linhvuc::all();
        $value = $request->get('value');

        $dsKhoaHoc = khoahoc::where('muc_do',$value)->get();
        dd($value);
        // $dsTimKiem = khoahoc::query();

        // if ($request->has('muc_do')) {
        //     $dsTimKiem->where('muc_do', 'LIKE', '%' . $request->muc_do . '%');
        // }

        // if ($request->has('status')) {
        //     $dsKhoaHoc->where('status', $request->status);
        // }
        // if ($request->has('type')) {
        //     $dsKhoaHoc->where('type', $request->type);
        // }

        // if ($request->has('price')) {
        //     $dsKhoaHoc->where('price', $request->price);
        // }

        // $dsKhoaHoc =  $dsTimKiem->get();
        return view('tim-kiem',compact('dsKhoaHoc','dsLinhVuc'));
    }

    public function hienThiChiTietKhoaHoc($id)
    {
        $dsKhoaHoc = khoahoc::where('id', $id)->first();
        $dsLinhVuc = linhvuc::all();
        if($dsKhoaHoc == null)
        {
            return abort(404);
        }
        return view('KhoaHoc.chi-tiet-khoa-hoc', compact('dsKhoaHoc','dsLinhVuc'));
    }



}
