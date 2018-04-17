<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function getDanhSach()
    {
        $path = storage_path() . "/app/baiviet.json";
        $baiviet = json_decode(file_get_contents($path), true);
    	return view('admin.baiviet.danhsach',compact('baiviet'));
    }
    public function getThem()
    {
    	return view('admin.baiviet.them');
    }
    public function postThem()
    {
        $path = storage_path() . "/app/baiviet.json";
        $current_data = file_get_contents($path);  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
            'danhmuc'            =>  $_POST["danhmuc"],
            'icon'          =>     $_POST["icon"],  
            'mota'     =>     $_POST["mota"]  
        );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        file_put_contents($path, $final_data);
        return view('admin/baiviet/them',compact('final_data'));   
    }
    public function getSua()
    {
    	return view('admin.baiviet.sua');
    }
}
