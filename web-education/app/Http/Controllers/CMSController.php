<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\khoahoc;
use App\linhvuc;
use App\chuong;
use App\nguoidung;
use App\noidung;
use App\cthoadon;
use Session;
use Auth;

class CMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getXoaKhoahoc($idKhoaHoc)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $ktTonTai=cthoadon::where('khoa_hoc_id',$idKhoaHoc)->first();
            if($ktTonTai)
            {
                return redirect()->back()->with('warning','Không thể xóa. Khóa học đang có học viên');
            }
            $khoahocs=khoahoc::find($idKhoaHoc);
            $chuongs=$khoahocs->Chuong;
            foreach ($chuongs as $item) {
                $noidungs=noidung::where('chuong_id',$item->id);
                $noidungs->delete();
            }
            $khoahocs->Chuong()->delete();
            $khoahocs->delete();
            return redirect('khoa-hoc/ds-khoa-hoc-da-tao')->with('thongbao','Xóa thành công');
        }
        else
        {
            abort(401);
        }
    }


    public function getSuaKhoaHoc($idKhoaHoc)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $linhvucs= linhvuc::all();
            $chuongs= chuong::all();
            $khoahocs=khoahoc::find($idKhoaHoc);
            return view('sua-mo-ta-khoa-hoc',['khoahocs'=>$khoahocs,'linhvucs'=>$linhvucs,'chuongs'=>$chuongs]);
        }
        else
        {
            abort(401);
        }
    }
    public function postSuaKhoaHoc(Request $request,$idKhoaHoc)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $khoahocs=khoahoc::find($idKhoaHoc);
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

            $khoahocs->update();
            return redirect('khoa-hoc/sua/'.$idKhoaHoc)->with('thongbao','Sửa thành công');
        }
        else
        {
            abort(401);
        }
    }

    public function getXoaChuong($idChuong)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $chuongs=chuong::find($idChuong);
            $chuongs->delete();
            return redirect()->back()->with('thongbao','Xóa chương thành công');
        }
        else
        {
            abort(401);
        }
    }

    public function getSuaChuong($idChuong)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $noidungs=noidung::all();
            $chuongs=chuong::find($idChuong);
            return view('sua-chuong-khoa-hoc',['chuongs'=>$chuongs,'noidungs'=>$noidungs]);
        }
        else
        {
            abort(401);
        }
    }

    public function postSuaChuong(Request $request,$idChuong)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $chuongs=chuong::find($idChuong);
            $this->validate($request,
            [
                'TenChuong'=>'required'
            ],
            [   
                'TenChuong.required'=>'Bạn chưa nhập tên chương',
            ]);
            $chuongs->ten_chuong=$request->TenChuong;
            $chuongs->update();
            return redirect()->back()->with('thongbao','Sửa chương thành công');
        }
        else
        {
            abort(401);
        }
    }

    public function getXoaBaiGiang($idBaiGiang)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $noidungs=noidung::find($idBaiGiang);
            $noidungs->delete();
            return redirect()->back()->with('thongbao','Xóa Bài giảng thành công');
        }
        else
        {
            abort(401);
        }
    }
    public function getSuaBaiGiang($idBaiGiang)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $noidungs=noidung::find($idBaiGiang);
            return view('sua-bai-giang-khoa-hoc',['noidungs'=>$noidungs]);
        }
        else
        {
            abort(401);
        }
    }
    public function postSuaBaiGiang(Request $request,$idBaiGiang)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $noidungs=noidung::find($idBaiGiang);
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
            $noidungs->update();
            return redirect()->back()->with('thongbao','Sửa chương thành công');
        }
        else
        {
            abort(401);
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
