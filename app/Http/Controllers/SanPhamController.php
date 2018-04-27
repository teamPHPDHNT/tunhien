<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function getDanhSach()
    {   
        $path = storage_path() . "/app/sanpham.json";
        $sanpham = json_decode(file_get_contents($path), true);
        return view('admin.sanpham.danhsach',compact('sanpham'));
    }
    public function getThem()
    {
    	return view('admin.sanpham.them');
    }
    public function postThem()
    {
        $path = storage_path() . "/app/sanpham.json";
        $current_data = file_get_contents($path);  
        $array_data = json_decode($current_data, true);  
        $last_item    = end($array_data);
        $last_item_id = $last_item['id'];
        $extra = array(  
            'id'             => ++$last_item_id,
            'name'          =>     $_POST["name"],  
            'images'     =>     $_POST["images"]  
        );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        file_put_contents($path, $final_data);
        return view('admin/sanpham/them',compact('final_data'));   
    }
    public function getSua($id)
    {
        $data = [
            'id' => $id,
            'name' => 'Menu sadsadsad',
            'images' => 'Link 1',
        ];
        return view('admin.sanpham.sua', compact('data'));
    }

    public function postSua($id, Request $request)
    {
        $path = storage_path() . "/app/sanpham.json";
        $current_data = file_get_contents($path);
        $json = json_decode($current_data, true);
        $item = array("id" => $request->id, "name" => $request->name, "images" => $request->images);

        $sanpham = array();
        foreach ($json as $key => $value) {
            if ($id == $value["id"]) {
                array_push($sanpham, $item);
            } else {
                array_push($sanpham, $value);
            }
        }
        $final_data = json_encode($sanpham);  
        file_put_contents($path, $final_data);
        return view('admin.sanpham.danhsach',compact('sanpham'));
    }

    public function getXoa($id)
    {
        $path = storage_path() . "/app/sanpham.json";
        $current_data = file_get_contents($path);
        $sanpham = json_decode($current_data, true);
        $arr_index = 0;

        foreach($sanpham as $key => $value) {
            if ($value['id'] == $id) {
                $arr_index=$key;
            }
        }

        unset($sanpham[$arr_index]);
        
        $final_data = json_encode($sanpham); 
        file_put_contents($path,$final_data);

        return redirect()->route('admin.sanpham.danhsach');
    }
}
