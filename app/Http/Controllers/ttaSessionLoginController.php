<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ttaSessionLoginController extends Controller
{
    public function ttalogin(){
        return view('tta-Login');
    }

    public function ttaloginSubmit(Request $request) 
    {
        //validation
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // //check login -> store session -> redirect home
        // $ttaEmail = $request->input('email');
        // $ttapass = $request->input('password');

        // $ttaLoginSession = [
        //     'email'=>$ttaEmail,
        //     'password'=>$ttapass
        // ];
        // $tvc_json = json_encode($ttaLoginSession);

        
        // if($ttaEmail == "tienanhtran755@gmail.com " && $ttapass=="20112005@"){
        //     //lưa session
        //     $request->session()->put('K23CNT1-TranTienAnh',$ttaEmail);
        //     return redirect('/');     
        // }

        //  return redirect()->back()->with('tta-error','lỗi đăng nhập'); 
         // Lấy và làm sạch dữ liệu từ form
    $ttaEmail = trim($request->input('email')); // Loại bỏ khoảng trắng
    $ttapass = $request->input('password');

    // Kiểm tra thông tin đăng nhập
    if ($ttaEmail === "tienanhtran755@gmail.com" && $ttapass === "20112005@") {
        // Lưu thông tin vào session
        $request->session()->put('K23CNT1-TranTienAnh', $ttaEmail);
        return redirect('/'); // Chuyển hướng về trang chủ
    }

    // Nếu đăng nhập thất bại, quay lại với thông báo lỗi
    return redirect()->back()->with('tta-error', 'Thông tin đăng nhập không đúng.');    
    }

        public function ttalogout(Request $request)
        {
            $request->session()->forget('K23CNT1-TranTienAnh');
            return redirect()->back();
        }
}
