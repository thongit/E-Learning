<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\khoahoc;
use App\linhvuc;
use App\chuong;
use App\nguoidung;
use App\noidung;
use App\danhgiakh;
use App\tochuc;
use App\cthoadon;
use App\ketquakt;
use App\thaoluan;
use App\baikiemtra;
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
        if(auth()->user()->loai_tk == 2)
        {
            $nguoi_dung_ids=auth()->user()->id;
            $khoahocs=DB::table('khoa_hoc')->where('nguoi_dung_id', $nguoi_dung_ids)->get();
            return view('ds-khoa-hoc-da-tao',compact('khoahocs'));
        }
        else
        {
            abort(401);
        }
    }

    public function index()
    {
        $ketqua=DB::table('ct_hoa_don')->select('khoa_hoc_id',DB::raw('count(id) as total_sales'))->where('ct_hoa_don.trang_thai','=',2)->whereNull('ct_hoa_don.deleted_at')->groupBy('khoa_hoc_id')->orderBy('total_sales','desc')->paginate(6);
        $list=null;
        foreach($ketqua as $key => $kq)
        {
            $list[$key] = $kq->khoa_hoc_id;
        }
        $dsLinhVuc = linhvuc::whereIn('id',[1,2,3,4,5,6])->get();
        $dsKhoaHoc = khoahoc::where('trang_thai','=',3)->whereIn('id',$list)->paginate(6);
        return view('index', compact('dsKhoaHoc'));
    }

    public function getLinhVuc($id)
    {
        $dsKhoaHoc= khoahoc::where([['linh_vuc_id',$id],['trang_thai','=',3],])->paginate(6);
        $linhVuc = linhvuc::find($id);
        return view('linh-vuc-khoa-hoc',compact('dsKhoaHoc','linhVuc'));
    }

    public function getLinhVucPagin(Request $request)
    {
        $dsKhoaHoc= khoahoc::where([['linh_vuc_id',$request->id],['trang_thai','=',3],])->paginate(6);
        return view('KhoaHoc.khoahoc',compact('dsKhoaHoc'))->render();
    }

    public function hienThiKhoaHoc()
    {
        $dsKhoaHoc = khoahoc::where('trang_thai','=',3)->paginate(6);
        $dsLinhVuc = linhvuc::all();
        return view('KhoaHoc.khoa-hoc', compact('dsKhoaHoc','dsLinhVuc'));
    }

    public function hienThiKhoaHocPagin()
    {
        $dsKhoaHoc = khoahoc::where('trang_thai','=',3)->paginate(6);
        $dsLinhVuc = linhvuc::all();
        return view('KhoaHoc.khoahoc', compact('dsKhoaHoc','dsLinhVuc'))->render();
    }

    public function chiTietGiangVien($id)
    {
        $nguoidungs=nguoidung::find($id);
        if($nguoidungs == null)
        {
            abort(404);
        }
        $khoahocs= khoahoc::where('nguoi_dung_id',$id)->where('trang_thai',3)->get();
        return view('thong-tin-giang-vien', compact('nguoidungs','khoahocs'));
    }

    public function getGiangVien(Request $request)
    {
        $giangviens= nguoidung::where('loai_tk',2)->paginate(6);
        if($request->ajax())
        {
            $input = $request->ten;
            $tochuc = tochuc::where('ten_to_chuc', 'like', '%'.$input.'%')->get('nguoi_dung_id');
            $giangviens = nguoidung::where([['ho_ten', 'like', '%'.$input.'%'],['loai_tk','=',2],])->orWhereIn('id',$tochuc)->paginate(6);
            return view('giangvien', compact('giangviens'));
        }
        return view('giang-vien', compact('giangviens','giangviens'));
    }

    public function getGiangVienPagin(Request $request)
    {
        if($request->ten == null)
        {
            $input = "";
        }
        else
        {
            $input = $request->ten;
        }
        $tochuc = tochuc::where('ten_to_chuc', 'like', '%'.$input.'%')->get('nguoi_dung_id');
        $giangviens = nguoidung::where([['ho_ten', 'like', '%'.$input.'%'],['loai_tk','=',2],])->orWhereIn('id',$tochuc)->paginate(6);
        return view('giangvien', compact('giangviens'))->render();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getTaoMoTaKhoaHoc()
    {
        if(auth()->user()->loai_tk == 2)
        {
            $linhvucs= linhvuc::all();
            return view('tao-mo-ta-khoa-hoc',['linhvucs'=>$linhvucs]);
        }
        else
        {
            abort(401);
        }
    }
    public function postTaoMoTaKhoaHoc(Request $request)
    {
        if(auth()->user()->loai_tk == 2)
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
        else
        {
            abort(401);
        }
    }

    public function getTaoChuongChoKhoaHoc($idKhoahoc)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $chuongs= chuong::all();
            $khoahocs=khoahoc::find($idKhoahoc);
            if($khoahocs->nguoi_dung_id != auth()->user()->id)
            {
                abort(401);
            }
            return view('tao-chuong-cho-khoa-hoc',['chuongs'=>$chuongs,'khoahocs'=>$khoahocs]);
        }
        else
        {
            abort(401);
        }
    }

    public function postTaoChuongChoKhoaHoc(Request $request,$idKhoahoc)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $khoahocs=khoahoc::find($idKhoahoc);
            if($khoahocs->nguoi_dung_id != auth()->user()->id)
            {
                abort(401);
            }
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
        else
        {
            abort(401);
        }
    }

     public function getTaoBaiGiangChoChuong($idKhoahoc)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $chuongs= chuong::where('khoa_hoc_id','=',$idKhoahoc)->get();
            $noidungs= noidung::all();
            $khoahocs=khoahoc::find($idKhoahoc);
            if($khoahocs->nguoi_dung_id != auth()->user()->id)
            {
                abort(401);
            }
            if($khoahocs == null)
            {
                abort(404);
            }
            if($khoahocs->ctHoaDon == null)
            {
                return view('tao-bai-giang-cho-chuong',['chuongs'=>$chuongs,'khoahocs'=>$khoahocs,'noidungs'=>$noidungs]);
            }
            $tdC = 0;
            foreach($khoahocs->ctHoaDon as $ct)
            {
                $td = explode('_', $ct->tien_do);
                if($tdC < $td[0])
                {
                    $tdC = $td[0];
                }
            }

            $chuongs = chuong::where([['id','>=',$tdC],['khoa_hoc_id','=',$idKhoahoc],])->get();
            if(sizeof($chuongs) == 0)
            {
                return redirect()->back()->with('error','Không thể tạo bài giảng! Tạo chương mới để tạo thêm bài giảng.');
            }
            else
            {
                return view('tao-bai-giang-cho-chuong',['chuongs'=>$chuongs,'khoahocs'=>$khoahocs,'noidungs'=>$noidungs]);
            }
        }
        else
        {
            abort(401);
        }
    }

    public function postTaoBaiGiangChoChuong(Request $request,$idKhoahoc)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $khoahocs=khoahoc::find($idKhoahoc);
            if($khoahocs->nguoi_dung_id != auth()->user()->id)
            {
                abort(401);
            }
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
                'Video.max'=>'Dung lượng tối đa 100M',
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
        else
        {
            abort(401);
        }
    }
    public function xuLyDanhGia(Request $request,$id)
    {
        if(!Auth::check())
        {
            return redirect('khoa-hoc/'.$id)->with('loi','Bạn chưa đăng nhập!');
        }
        if($request->rating=="")
        {
            return redirect('khoa-hoc/'.$id)->with('loi','Bạn chưa chọn số sao!');
        }
        $khoaHoc = khoahoc::where([['id','=',$id],['trang_thai','=',3],])->first();
        if($khoaHoc == null)
        {
            abort(404);
        }
        $nguoi_dung_ids=auth()->user()->id;
        foreach($khoaHoc->ctHoaDon as $ct)
        {
            if($ct->hoaDon->nguoi_dung_id == $nguoi_dung_ids && $ct->trang_thai == 2)
            {
                $kiemtra = danhgiakh::where([['khoa_hoc_id','=',$id],['nguoi_dung_id','=',$nguoi_dung_ids],])->first();
                if($kiemtra != null)
                {
                    return redirect()->back()->with('error','Bạn đánh giá cho khóa học rồi!');
                }
                $danhgiakh= new danhgiakh();
                $danhgiakh->nguoi_dung_id=$nguoi_dung_ids;
                $danhgiakh->so_sao=$request->rating;
                if($request->binh_luan == null)
                {
                    $danhgiakh->noi_dung="";
                }
                else
                {
                    $danhgiakh->noi_dung=$request->binh_luan;
                }
                $danhgiakh->khoa_hoc_id=$id;
                $danhgiakh->save();
                return redirect('khoa-hoc/'.$id)->with('thongbao','Bạn đã gửi đánh giá cho khóa học!');
            }
        }
        abort(404);
    }

    public function xuLyBinhLuan(Request $request)
    {
        $nguoi_dung_ids=auth()->user()->id;
        $thaoluan= new thaoluan();
        $thaoluan->nguoi_dung_id=$nguoi_dung_ids;
        $thaoluan->noi_dung=$request->noi_dung;
        $thaoluan->noi_dung_id=$request->idND;
        $thaoluan->save();
        $binhLuan = thaoluan::where('noi_dung_id','=',$request->idND)->orderBy('id','desc')->paginate(4);
        return view('binh-luan', compact('binhLuan'));
    }

    public function layBinhLuan(Request $request)
    {
        $binhLuan = thaoluan::where('noi_dung_id','=',$request->idND)->orderBy('id','desc')->paginate(4);
        return view('binh-luan', compact('binhLuan'))->render();
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
    public function video($id)
    {
        // $binhluan = thaoluan::where('noi_dung_id','=',$id)->get();
        // dd($binhluan);
        $tienDo = 0;
        $video = noidung::find($id);
        $id_nd = session()->get('id_nd');
        if($video == null)
        {
            abort(404);
        }
        $binhLuan = thaoluan::where('noi_dung_id','=',$video->id)->orderBy('id','desc')->paginate(4);
        if($video->Chuong->khoaHoc->nguoi_dung_id == $id_nd)
        {
            if(sizeof($video->Chuong->baiKiemTra) >0)
            {
                $kiemtra = ketquakt::where([['nguoi_dung_id','=',$id_nd],['bai_kiem_tra_id', '=', $video->Chuong->baiKiemTra[0]->id],])->first();
                $kiemtra1 = ketquakt::onlyTrashed()->where([['nguoi_dung_id','=',$id_nd],['bai_kiem_tra_id', '=', $video->Chuong->baiKiemTra[0]->id],])->first();
            }
            else
            {
                $kiemtra = null;
                $kiemtra1 = null;
            }
            $tienDo = 1;
            return view('video-khoa-hoc',compact('video','kiemtra','kiemtra1','tienDo','binhLuan'));
        }
        $dem = 0;
        foreach($video->Chuong->khoaHoc->ctHoaDon as $dshv)
        {
            if($dshv->hoaDon->nguoiDung->id == $id_nd && $dshv->trang_thai == 2)
            {
                $td = explode('_', $dshv->tien_do);
                if(($td[0] > $video->Chuong->id) || ($td[0] == $video->Chuong->id && $td[1] >= $video->id))
                {
                    $tienDo = 1;
                }
                else
                {
                    foreach($video->Chuong->khoaHoc->dsChuongBai as $key => $bai)
                    {
                        if($bai->chuong_id < $td[0] ||  ($bai->chuong_id == $td[0] && $bai->id <= $td[1]))
                        {
                            $dem++;
                        }
                        else if($video->id == $bai->id && $key == $dem)
                        {
                            $tienDo = 2;
                            break;
                        }
                    }
                }
                if(sizeof($video->Chuong->baiKiemTra) >0)
                {
                    $kiemtra = ketquakt::where([['nguoi_dung_id','=',$id_nd],['bai_kiem_tra_id', '=', $video->Chuong->baiKiemTra[0]->id],])->first();
                    $kiemtra1 = ketquakt::onlyTrashed()->where([['nguoi_dung_id','=',$id_nd],['bai_kiem_tra_id', '=', $video->Chuong->baiKiemTra[0]->id],])->first();
                }
                else
                {
                    $kiemtra = null;
                    $kiemtra1 = null;
                }
                return view('video-khoa-hoc',compact('video','kiemtra','kiemtra1','tienDo','binhLuan'));
            }
        }
        return redirect()->back()->with('warning','Bạn chưa ghi danh vào khóa học!');
    }

    public function hoanThanh(Request $request)
    {
        $nd = nguoidung::find(auth()->user()->id);
        $noiDung = noidung::find($request->idND);
        $kq = 0;
        foreach($nd->hoaDon as $hd)
        {
            if($hd->ctHoaDon[0]->khoa_hoc_id == $noiDung->Chuong->khoa_hoc_id)
            {
                $cthd = cthoadon::find($hd->ctHoaDon[0]->id);
                $cthd->tien_do = $noiDung->chuong_id.'_'.$noiDung->id;
                $cthd->save();
                $kq = 1;
            }
        }
        return response()->json(array('msg'=> $kq), 200);
    }


    public function timKiem(Request $request)
    {
        //$dsSanPham = SanPham::paginate(12);
        if($request->ajax())
        {
            $dsLinhVuc = linhvuc::all();
            $tuKhoa = $request->get('input');
            $input = $request->get('input');
            $mucdo = $request->get('mucdo');
            $linhvuc = $request->get('linhvuc');
            $sapxep = $request->get('sapxep');
            $ngonngu = $request->get('ngonngu');
            if($mucdo == "Mức độ")
            {
                $mucdo = '';
            }
            if($ngonngu == "Ngôn ngữ")
            {
                $ngonngu = '';
            }
            $tochuc = tochuc::where('ten_to_chuc', 'like', '%'.$input.'%')->get('nguoi_dung_id');
            $dsgv = nguoidung::where([['ho_ten', 'like', '%'.$input.'%'],['loai_tk','=',2],])->orWhereIn('id',$tochuc)->get('id');
            if($dsgv != null)
            {
                if($linhvuc == "0")
                {
                    if($sapxep == "1")
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','desc')->paginate(6);
                    }
                    else if ($sapxep == "2")
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','asc')->paginate(6);
                    }
                    else
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->paginate(6);
                    }
                }
                else
                {
                    if($sapxep == "1")
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','desc')->paginate(6);
                    }
                    else if ($sapxep == "2")
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','asc')->paginate(6);
                    }
                    else
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->paginate(6);
                    }
                }
            }
            else
            {
                if($linhvuc == "0")
                {
                    if($sapxep == "1")
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','desc')->paginate(6);
                    }
                    else if ($sapxep == "2")
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','asc')->paginate(6);
                    }
                    else
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->paginate(6);
                    }
                }
                else
                {
                    if($sapxep == "1")
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','desc')->paginate(6);
                    }
                    else if ($sapxep == "2")
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','asc')->paginate(6);
                    }
                    else
                    {
                        $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->paginate(6);
                    }
                }
            }
            return view('khoahocpage', compact('dsKhoaHoc','dsLinhVuc','tuKhoa'));
        }
        $dsLinhVuc = linhvuc::all();
        $tuKhoa = $request->key_word_tenkh;
        $tochuc = tochuc::where('ten_to_chuc', 'like', '%'.$request->key_word_tenkh.'%')->get('nguoi_dung_id');
        $dsgv = nguoidung::where([['ho_ten', 'like', '%'.$request->key_word_tenkh.'%'],['loai_tk','=',2],])->orWhereIn('id',$tochuc)->get('id');
        if($dsgv != null)
        {
            $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$request->key_word_tenkh.'%'],['trang_thai','=',3],])->orWhereIn('nguoi_dung_id',$dsgv)->where('trang_thai','=',3)->paginate(6);
        }
        else
        {
            $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$request->key_word_tenkh.'%'],['trang_thai','=',3],])->paginate(6);
        }
        return view('tim-kiem', compact('dsKhoaHoc','dsLinhVuc','tuKhoa'));
    }

    public function timKiemNangCao(Request $request)
    {
        $dsLinhVuc = linhvuc::all();
        $tuKhoa = $request->get('input');
        $input = $request->get('input');
        $mucdo = $request->get('mucdo');
        $linhvuc = $request->get('linhvuc');
        $sapxep = $request->get('sapxep');
        $ngonngu = $request->get('ngonngu');
        if($mucdo == "Mức độ")
        {
            $mucdo = '';
        }
        if($ngonngu == "Ngôn ngữ")
        {
            $ngonngu = '';
        }
        $tochuc = tochuc::where('ten_to_chuc', 'like', '%'.$input.'%')->get('nguoi_dung_id');
        $dsgv = nguoidung::where([['ho_ten', 'like', '%'.$input.'%'],['loai_tk','=',2],])->orWhereIn('id',$tochuc)->get('id');
        if($dsgv != null)
        {
            if($linhvuc == "0")
            {
                if($sapxep == "1")
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','desc')->paginate(6);
                }
                else if ($sapxep == "2")
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','asc')->paginate(6);
                }
                else
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->paginate(6);
                }
            }
            else
            {
                if($sapxep == "1")
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','desc')->paginate(6);
                }
                else if ($sapxep == "2")
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','asc')->paginate(6);
                }
                else
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orWhereIn('nguoi_dung_id',$dsgv)->where([['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->paginate(6);
                }
            }
        }
        else
        {
            if($linhvuc == "0")
            {
                if($sapxep == "1")
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','desc')->paginate(6);
                }
                else if ($sapxep == "2")
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','asc')->paginate(6);
                }
                else
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['ngon_ngu','like', '%' . $ngonngu . '%'],])->paginate(6);
                }
            }
            else
            {
                if($sapxep == "1")
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','desc')->paginate(6);
                }
                else if ($sapxep == "2")
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->orderBy('gia','asc')->paginate(6);
                }
                else
                {
                    $dsKhoaHoc = khoahoc::where([['ten_khoa_hoc', 'like', '%'.$input.'%'],['trang_thai','=',3],['muc_do', 'like', '%' . $mucdo . '%'],['linh_vuc_id','=',$linhvuc],['ngon_ngu','like', '%' . $ngonngu . '%'],])->paginate(6);
                }
            }
        }
        return view('khoahocpage', compact('dsKhoaHoc','dsLinhVuc','tuKhoa'))->render();
    }

    public function hienThiChiTietKhoaHoc($id)
    {
        $dsKhoaHoc = khoahoc::where([['id','=', $id],['trang_thai','=',3]])->first();
        if($dsKhoaHoc == null)
        {
            return abort(404);
        }
        $listKH = khoahoc::where([['linh_vuc_id', $dsKhoaHoc->linh_vuc_id],['ngon_ngu','=',$dsKhoaHoc->ngon_ngu],])
        ->whereNotIn('id',[$id])->paginate(3);
        $dsLinhVuc = linhvuc::all()->random(5);
        $danhGia = danhgiakh::where('khoa_hoc_id','=',$id)->get();
        $sao1 = danhgiakh::where([['khoa_hoc_id','=',$id],['so_sao','=',1],])->count();
        $sao2 = danhgiakh::where([['khoa_hoc_id','=',$id],['so_sao','=',2],])->count();
        $sao3 = danhgiakh::where([['khoa_hoc_id','=',$id],['so_sao','=',3],])->count();
        $sao4 = danhgiakh::where([['khoa_hoc_id','=',$id],['so_sao','=',4],])->count();
        $sao5 = danhgiakh::where([['khoa_hoc_id','=',$id],['so_sao','=',5],])->count();
        if(sizeof($danhGia)>0)
        {
            $trungBinh =($sao1 + $sao2*2 + $sao3*3 + $sao4*4 + $sao5*5)/sizeof($danhGia);
            $ctDanhGia = array(
                '0' => $sao1,
                '1' => $sao2,
                '2' => $sao3,
                '3' => $sao4,
                '4' => $sao5,
                '5' => round( $trungBinh, 1, PHP_ROUND_HALF_EVEN),
                '6' => $sao1/sizeof($danhGia)*100,
                '7' => $sao2/sizeof($danhGia)*100,
                '8' => $sao3/sizeof($danhGia)*100,
                '9' => $sao4/sizeof($danhGia)*100,
                '10' => $sao5/sizeof($danhGia)*100,
            );
        }
        else
        {
            $ctDanhGia = array(
                '0' => 0,
                '1' => 0,
                '2' => 0,
                '3' => 0,
                '4' => 0,
                '5' => 0,
                '6' => 0,
                '7' => 0,
                '8' => 0,
                '9' => 0,
                '10' => 0,
            );
        }
        $kiemtra = 0;
        $td = null;
        $ktdgkh = null;
        if(auth()->user())
        {
            $id_nd = auth()->user()->id;
            $ktdgkh = danhgiakh::where([['khoa_hoc_id','=',$id],['nguoi_dung_id','=',$id_nd],])->first();
            foreach($dsKhoaHoc->ctHoaDon as $ct)
            {
                if($ct->hoaDon->nguoi_dung_id == $id_nd && $ct->trang_thai == 2)
                {
                    $td = explode('_', $ct->tien_do);
                    $kiemtra = 1;
                    break;
                }
            }
        }
        $dsChuong = chuong::where('khoa_hoc_id','=',$id)->get();
        $time[0] = 0;
        foreach($dsKhoaHoc->dsChuongBai as $bai)
        {
            $getID3 = new \getID3;
            $file = $getID3->analyze(public_path('assets/video/'.$bai->video));
            $time[$bai->id] = $file['playtime_seconds'];
        }
        $time[0] = gmdate("H:i:s", array_sum($time));
        $danhGia = danhgiakh::where('khoa_hoc_id','=',$id)->paginate(3);
        return view('KhoaHoc.chi-tiet-khoa-hoc', compact('dsKhoaHoc','dsLinhVuc','kiemtra','ctDanhGia','listKH','td','time','ktdgkh','danhGia'));
    }
    public function getBaiKiemTra($id)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $khoahoc = khoahoc::where([['id','=',$id],['nguoi_dung_id','=',auth()->user()->id],])->first();
            if($khoahoc != null)
            {

                if(sizeof($khoahoc->Chuong) > 0)
                {
                    $dsBaiKT[] = null;
                    $i = 0;
                    foreach($khoahoc->Chuong as $baikt)
                    {
                        if(sizeof($baikt->baiKiemTra) >0)
                        {
                            $dsBaiKT[$i] = $baikt->baiKiemTra[0];
                            $i++;
                        }
                    }
                    return view('ql-bai-kiem-tra', compact('dsBaiKT','khoahoc'));
                }
                else
                {
                    return redirect('khoa-hoc/tao-chuong-cho-khoa-hoc/'.$id);
                }
            }
            else
            {
                abort(404);
            }
        }
        else
        {
            abort(404);
        }
    }

    public function bangDiem($id)
    {
        $baikt = baikiemtra::find($id);
        if($baikt == null)
        {
            abort(404);
        }
        if(auth()->user()->id != $baikt->Chuong->khoaHoc->nguoi_dung_id)
        {
            abort(401);
        }
        $list = ketquakt::where('bai_kiem_tra_id','=', $id)->get();
        return view('bang-diem',compact('list','baikt'));
    }

    public function hienThiDanhSachBaiKTra($id)
    {
        $khoaHoc = khoahoc::find($id);
        if($khoaHoc == null)
        {
            abort(404);
        }
        $idNguoiDung=auth()->user()->id;
        foreach($khoaHoc->ctHoaDon as $ct)
        {
            if($ct->hoaDon->nguoi_dung_id == $idNguoiDung && $ct->trang_thai == 2)
            {
                
                return view('ds-bai-kiem-tra', compact('khoaHoc','idNguoiDung'));
            }
        }
        return abort(401);
    }

    public function layDanhGia(Request $request)
    {
        $danhGia = danhgiakh::where('khoa_hoc_id','=',$request->idKH)->paginate(3);
        return view('KhoaHoc.danhgia',compact('danhGia'))->render();
    }
}