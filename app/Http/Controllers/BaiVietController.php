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
    public function getSua($id)
    {
        $data = [
            'id' => $id,
            'danhmuc' => 'Menu sadsadsad',
            'icon' => 'Link 1',
            'mota' => 'Link 1',
        ];
        return view('admin.baiviet.sua', compact('data'));
    }

    public function postSua($id, Request $request)
    {
        $path = storage_path() . "/app/baiviet.json";
        $current_data = file_get_contents($path);
        $json = json_decode($current_data, true);
        $item = array("id" => $request->id, "danhmuc" => $request->danhmuc, "icon" => $request->icon, "mota" => $request->mota);

        $baiviet = array();
        foreach ($json as $key => $value) {
            if ($id == $value["id"]) {
                array_push($baiviet, $item);
            } else {
                array_push($baiviet, $value);
            }
        }
        $final_data = json_encode($baiviet);  
        file_put_contents($path, $final_data);
        return view('admin.baiviet.danhsach',compact('baiviet'));
    }

    public function getXoa($id)
    {
        $path = storage_path() . "/app/baiviet.json";
        $current_data = file_get_contents($path);
        $baiviet = json_decode($current_data, true);
        $arr_index = 0;

        foreach($baiviet as $key => $value) {
            if ($value['id'] == $id) {
                $arr_index=$key;
            }
        }

        unset($baiviet[$arr_index]);
        
        $final_data = json_encode($baiviet); 
        file_put_contents($path,$final_data);

        return redirect()->route('admin.baiviet.danhsach');
    }
}
