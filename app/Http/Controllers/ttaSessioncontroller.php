<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ttaSessioncontroller extends Controller
{
    //đọc dữ liệu từ session 
    public function TTaGetSession(Request $request)
    {
        if( $request -> session()->has("K23CNT1TranTienAnh"))
        {
            echo "<h2> Session Data: ". $request->session()->get("K23CNT1TranTienAnh");
        }
         else
        {
            echo "<h2> No Data </h2>";
        }
    }
    //Lưu Trữ dữ liệu vaò session
    public function ttastoreSessionData( Request $request)
    {
        $request->session()->put("K23CNT1TranTienAnh","Devmaster Academy");
        echo "<h2> Dữ liệu đã được lưu vào Session <h2>";
    }
    //Delete session
    public function ttadeleteSession(Request $request){
        $request->session()->forget("K23CNT1TranTienAnh");
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    } 
   
}
