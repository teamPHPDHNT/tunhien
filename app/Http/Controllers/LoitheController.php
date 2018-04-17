<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoitheController extends Controller
{
    public function getDanhSach()
    {
        $path = storage_path() . "/app/loithe.json";
        $loithe = json_decode(file_get_contents($path), true);
        return view('admin.loithe.danhsach',compact('loithe'));
    }
    public function getThem()
    {
    	return view('admin.loithe.them');
    }
    public function postThem()
    {
        $path = storage_path() . "/app/loithe.json";
        $current_data = file_get_contents($path);  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
            'noidung'             => $_POST["noidung"],
            'icon'          =>     $_POST["icon"],  
            'mota'     =>     $_POST["mota"]  
        );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        file_put_contents($path, $final_data);
        return view('admin/loithe/them',compact('final_data'));   
    }
    public function getSua()
    {
    	return view('admin.loithe.sua');
    }
}
