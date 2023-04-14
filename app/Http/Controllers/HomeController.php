<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function showRoom()
    {
        $loai_phongs = DB::table('loai_phongs')->where('tinhTrang','1')->orderby('maLoaiPhong','desc')->get();
        return view('Home.pages.room')->with('loai_phongs',$loai_phongs);
    }
    public function showPhong($maLoaiPhong)
    {
        $phongs = DB::table('phongs')
        ->where('maLoaiPhong',$maLoaiPhong)->orderby('maPhong','desc')->get();
        return view('Home.pages.room_diagram')->with('phongs',$phongs);
    }
    public function sendMail(){
        $to_name = "Bách";
        $to_email = "vanbach0102@gmail.com";

        $data = array("name"=>$to_name, "body"=>"Test gửi mail thành công");

        Mail::send('send_mail', $data, function ($message) use ($to_email,$to_name) {
            $message->from($to_email,$to_name);
            $message->to($to_email)->subject('Test gửi mail');

        });
        return "A mail  has been sent to you";
    }

}
