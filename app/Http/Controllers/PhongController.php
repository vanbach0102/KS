<?php

namespace App\Http\Controllers;

use App\Models\Phong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Exports\ExcelExport;
use App\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;


session_start();
class PhongController extends Controller
{
    public function auth_login()
    {
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_phong()
    {
        $this->auth_login();
        $loaiPhong = DB::table('loai_phongs')->orderby('maLoaiPhong','desc')->get();
        return view('Admin.phong.add_phong')->with('loaiPhong',$loaiPhong);
    }
    public function all_phong()
    {
        $all = DB::table('phongs')
        ->join('loai_phongs','loai_phongs.maLoaiPhong','=','phongs.maLoaiPhong')
        ->orderby('phongs.maPhong','desc')->get();
        $data = view('Admin.phong.all_phong')->with('all_phong',$all);
        return view('admin_layout')->with('Admin.all_phong',$data);
    }
    public function save_phong(Request $request)
    {
        $this->auth_login();
        $data = array();
        $data['maLoaiPhong'] = $request->theLoaiPhong;
        $data['soPhong'] = $request->soPhong;
        $data['giaPhong'] = $request->giaPhong;
        $data['status'] = $request->status;
        $get_image = $request->file('hinhAnhPhong');
        if($get_image){
            $new_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$new_image_name));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('C:\xampp\htdocs\QuanLyKS\public\images-ks\phong',$new_image);
            $data['hinhAnhPhong'] = $new_image;
            DB::table('phongs')->insert($data);
            Session::put('message','Thêm thành công');
            return Redirect::to('/add-phong');
        }else{
            $data['phong'] = null;
            $data['status'] = null;
            $data['hinhAnhPhong'] = null;

            Session::put('message','Thêm thất bại');

            return Redirect::to('/add-phong');
        }

    }
    public function edit_phong($maphong)
    {
        $edit_phong = DB::table('phongs')->where('maphong',$maphong)->get();

        return view('Admin.phong.edit_phong')->with('phong',$edit_phong);
    }
    public function update_phong(Request $request,$maphong)
    {
        $this->auth_login();
        $data = array();
        $data['maPhong'] = $request->maPhong;

        DB::table('phongs')->where('maPhong',$maphong)->update($data);

        Session::put('message','Cập nhật thành công');

        return Redirect::to('/all-phong');

    }
    public function unset_phong($maPhong)
    {
    DB::table('phongs')->where('maPhong',$maPhong)->update(['status' => 0]);
    Session::put('message','Thay đôi trạng thái chưa đặt thành công');
    return Redirect::to('/all-phong');

    }
    public function set_phong($maPhong)
    {
    DB::table('phongs')->where('maPhong',$maPhong)->update(['status' => 1]);
    Session::put('message','Thay đôi trạng thái đã đặt thành công');
    return Redirect::to('/all-phong');
    }
    public function delete_phong($maPhong){
        $this->auth_login();
        DB::table('phongs')->where('maPhong',$maPhong)->delete();
        Session::put('message','Xóa thành công');

        return Redirect::to('/all-phong');
    }


}
