<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\khoahoc;
use App\linhvuc;
use App\chuong;
use App\noidung;


class KhoaHocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khoahocs=DB::table('khoa_hoc')->get();
        return view('ds-khoa-hoc-da-tao',compact('khoahocs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTaoMoTaKhoaHoc()
    {
        $linhvucs= linhvuc::all();
        return view('tao-mo-ta-khoa-hoc',['linhvucs'=>$linhvucs]);
    }
    public function postTaoMoTaKhoaHoc(Request $request)
    {
        $khoahocs= new khoahoc;
        $this->validate($request,
        [
            'TenKhoaHoc'=>'required',
            'MoTaKhoaHoc'=>'required',
            'AnhKhoaHoc'=>'required',
            'LinhVuc'=>'required',
            'Gia'=>'required',
            'MoTaTongQuat'=>'required'
        ],
        [   
            'TenKhoaHoc.required'=>'Bạn chưa nhập tên khóa học',
            'MoTaKhoaHoc.required'=>'Bạn chưa nhập mô tả khóa học',
            'AnhKhoaHoc.required'=>'Bạn chưa upload hình khóa học',
            'LinhVuc.required'=>'2412',
            'Gia.required'=>'Bạn chưa nhập giá',
            'MoTaTongQuat.required'=>'Bạn chưa nhập mô tả tổng quát'

        ]);
        $khoahocs->ten_khoa_hoc= $request->TenKhoaHoc;
        $khoahocs->mo_ta_ngan= $request->MoTaKhoaHoc;
        $khoahocs->gia= $request->Gia;
        $khoahocs->mo_ta_chi_tiet= $request->MoTaTongQuat;
        $khoahocs->linh_vuc_id=$request->LinhVuc;
        $khoahocs->nguoi_dung_id=1;
        $khoahocs->trang_thai=1;
        $khoahocs->hinh_anh=1;
        $khoahocs->ngon_ngu=$request->NgonNgu;
        $khoahocs->muc_do=$request->MucDo;

        $khoahocs->save();
        if($khoahocs->save())
        {
            $idKhoaHoc=$khoahocs->id;
            return redirect('khoa-hoc/tao-chuong-cho-khoa-hoc/'.$idKhoaHoc);
        }
        return redirect('khoa-hoc/tao-mo-ta-khoa-hoc')->with('thongbao','Thêm thành công');
    }

    public function getTaoChuongChoKhoaHoc($idKhoahoc)
    {
        $chuongs= chuong::all();
        $khoahocs=khoahoc::find($idKhoahoc);
        return view('tao-chuong-cho-khoa-hoc',['chuongs'=>$chuongs,'khoahocs'=>$khoahocs]);
    }

    public function postTaoChuongChoKhoaHoc(Request $request,$idKhoahoc)
    {
        $khoahocs=khoahoc::find($idKhoahoc);
        $size = count($request->all())-1;
        for ($i=1; $i <= $size; $i++) {
        $chuongs= new chuong();
            $c='chuong'.$i;
            $chuongs->ten_chuong=$request->input($c);
            $chuongs->khoa_hoc_id=$khoahocs->id;
            $chuongs->thoi_gian=1;
            $chuongs->trang_thai=1;
            $chuongs->save();
        }
        $idKhoaHoc=$khoahocs->id;
        return redirect('tao-bai-giang-cho-chuong/'.$idKhoaHoc)->with('thongbao','Thêm thành công');
    }

     public function getTaoBaiGiangChoChuong($idKhoahoc)
    {
        $chuongs= chuong::all();
        $noidungs= noidung::all();
        $khoahocs=khoahoc::find($idKhoahoc);
        return view('tao-bai-giang-cho-chuong',['chuongs'=>$chuongs,'khoahocs'=>$khoahocs,'noidungs'=>$noidungs]);
    }

    public function postTaoBaiGiangChoChuong(Request $request,$idKhoahoc)
    {
        $khoahocs=khoahoc::find($idKhoahoc);
        $noidungs= new noidung;
        // if($request->hasFile('Video'))
        // {
        //     $file= $request->file('Video');
        //     $name=$file->getClientOriginalName();
        //     $file->move('assets/images/'.$name);
        //     $noidungs->video=$name;
        // }

        $this->validate($request,
        [
            'TieuDe'=>'required',
            'Video'=>'required|mimes:mpeg,3gp,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|nullable|max:100040'
        ],
        [   
            'TieuDe.required'=>'Chưa nhập tên bài giảng',
            'Video.required'=>'Bạn chưa upload video'

        ]);

        if($request->hasFile('Video'))
        {
            $file=$request->file('Video');
          $filenameWithExt = $request->file('Video')->getClientOriginalName();
          $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
          $extension = $request->file('Video')->getClientOriginalExtension();
          $fileNameToStore = $filename.'_'.time().'.'.$extension;
          $destinationPath = 'assets/upload';
            $file->move($destinationPath,$fileNameToStore);
        }

        $noidungs->video=$fileNameToStore;
        $noidungs->tieu_de= $request->TieuDe;
        if($request->TaiLieu=="")
        {
            $noidungs->tai_lieu="_";
        }
        else{
            $noidungs->tai_lieu= $request->TaiLieu;
        }
        $noidungs->chuong_id= $request->Chuong;
        $noidungs->trang_thai=1;
        $noidungs->save();
        $idKhoaHoc=$khoahocs->id;
        return redirect('khoa-hoc/tao-bai-giang-cho-chuong/'.$idKhoaHoc)->with('thongbao','Thêm thành công');
    }
    


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
