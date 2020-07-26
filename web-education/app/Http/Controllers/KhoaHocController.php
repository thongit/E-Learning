<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\khoahoc;
use App\linhvuc;
use App\chuong;
use App\nguoidung;
use App\noidung;
use Session;
use Auth;

class KhoaHocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDanhSachKhoaHoc()
    {
        $nguoi_dung_ids=auth()->user()->id;
        $khoahocs=DB::table('khoa_hoc')->where('nguoi_dung_id', $nguoi_dung_ids)->get();
        return view('ds-khoa-hoc-da-tao',compact('khoahocs'));
    }


    public function index()
    {
        $dsLinhVuc = linhvuc::all();
        $dsKhoaHoc = khoahoc::whereIn('id',[1,2,3,4,5,6])->get();
        return view('index', compact('dsKhoaHoc','dsLinhVuc'));
    }

    public function getLinhVuc($id)
    {
        $khoaHoc_linhVuc= khoahoc::where('linh_vuc_id',$id)->get();
        return view('linh-vuc-khoa-hoc',compact('khoaHoc_linhVuc'));
    }

    public function hienThiKhoaHoc()
    {
        $dsKhoaHoc = khoahoc::all();
        $dsLinhVuc = linhvuc::all();
        return view('KhoaHoc.khoa-hoc', compact('dsKhoaHoc','dsLinhVuc'));
    }

    public function getGiangVien()
    {
        $giangviens= nguoidung::where('loai_tk',2)->get();
        return view('giang-vien', compact('giangviens','giangviens'));
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
            'AnhKhoaHoc'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'LinhVuc'=>'required',
            'Gia'=>'required',
            'MoTaTongQuat'=>'required'

        ],
        [
            'TenKhoaHoc.required'=>'Bạn chưa nhập tên khóa học',
            'MoTaKhoaHoc.required'=>'Bạn chưa nhập mô tả khóa học',
            'AnhKhoaHoc.required'=>'Bạn chưa upload hình khóa học',
            'AnhKhoaHoc.image'=>'Định dạng phải là hình ảnh',
            'AnhKhoaHoc.mimes'=>'Đuôi hình ảnh phải là:jpeg,png,jpg,gif,svg',
            'AnhKhoaHoc.max'=>'Dung lượng tối đa 2048kb',
            'LinhVuc.required'=>'Chọn lĩnh vực',
            'Gia.required'=>'Bạn chưa nhập giá',
            'MoTaTongQuat.required'=>'Bạn chưa nhập mô tả tổng quát'

        ]);
        $khoahocs->ten_khoa_hoc= $request->TenKhoaHoc;
        $khoahocs->mo_ta_ngan= $request->MoTaKhoaHoc;
        $khoahocs->gia= $request->Gia;
        $khoahocs->mo_ta_chi_tiet= $request->MoTaTongQuat;
        $khoahocs->linh_vuc_id=$request->LinhVuc;

        if(!Auth::check())
        {
            $linhvucs= linhvuc::all();
            return view('tao-mo-ta-khoa-hoc',['linhvucs'=>$linhvucs]);
        }

        $khoahocs->nguoi_dung_id=auth()->user()->id;
        $khoahocs->trang_thai=1;

        if($request->hasFile('AnhKhoaHoc'))
        {
          $file=$request->file('AnhKhoaHoc');
          $filenameWithExt = $request->file('AnhKhoaHoc')->getClientOriginalName();
          $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
          $extension = $request->file('AnhKhoaHoc')->getClientOriginalExtension();
          $fileNameToStore = $filename.'_'.time().'.'.$extension;
          $destinationPath = 'assets/images';
          $file->move($destinationPath,$fileNameToStore);
        }
        $khoahocs->hinh_anh=$fileNameToStore;
        $khoahocs->ngon_ngu=$request->NgonNgu;
        $khoahocs->muc_do=$request->MucDo;

        $khoahocs->save();
        if($khoahocs->save())
        {
            $idKhoaHoc=$khoahocs->id;
            return redirect('khoa-hoc/tao-chuong-cho-khoa-hoc/'.$idKhoaHoc);
        }
        return redirect('khoa-hoc/tao-mo-ta-khoa-hoc')->back()->withInput(Input::all())->with('thongbao','Thêm thành công');
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
        return redirect('khoa-hoc/tao-bai-giang-cho-chuong/'.$idKhoaHoc)->with('thongbao','Thêm thành công');
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
            'TaiLieu'=>'mimes:doc,pdf,docx|max:10000',
            'Video'=>'required|mimes:mpeg,3gp,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|nullable|max:100040'
        ],
        [
            'TieuDe.required'=>'Chưa nhập tên bài giảng',
            'TaiLieu.mimes'=>'Đuôi file phải là doc,pdf,docx',
            'TaiLieu.max'=>'Dung lượng tối đa 10M',
            'Video.required'=>'Bạn chưa upload video'
        ]);

        if($request->hasFile('Video'))
        {
            $file=$request->file('Video');
          $filenameWithExt = $request->file('Video')->getClientOriginalName();
          $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
          $extension = $request->file('Video')->getClientOriginalExtension();
          $fileNameToStore = $filename.'_'.time().'.'.$extension;
          $destinationPath = 'assets/video';
            $file->move($destinationPath,$fileNameToStore);
        }
        $noidungs->video=$fileNameToStore;

        if($request->hasFile('TaiLieu'))
        {
            $file=$request->file('TaiLieu');
          $filenameWithExt = $request->file('TaiLieu')->getClientOriginalName();
          $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
          $extension = $request->file('TaiLieu')->getClientOriginalExtension();
          $fileNameToStore = $filename.'_'.time().'.'.$extension;
          $destinationPath = 'assets/file';
            $file->move($destinationPath,$fileNameToStore);
        }
        if($request->TaiLieu=="")
        {
            $noidungs->tai_lieu="_";
        }
        else{
            $noidungs->tai_lieu=$fileNameToStore;
        }
        $noidungs->tieu_de= $request->TieuDe;
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