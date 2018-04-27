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
        $last_item    = end($array_data);
        $last_item_id = $last_item['id']; 
        $extra = array(
            'id'             => ++$last_item_id,  
            'noidung'             => $_POST["noidung"],
            'icon'          =>     $_POST["icon"],  
            'mota'     =>     $_POST["mota"]  
        );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        file_put_contents($path, $final_data);
        return view('admin/loithe/them',compact('final_data'));   
    }
    public function getSua($id)
    {
        $data = [
            'id' => $id,
            'noidung' => 'Menu sadsadsad',
            'icon' => 'Link 1',
            'mota' => 'Link 1',
        ];
        return view('admin.loithe.sua', compact('data'));
    }

    public function postSua($id, Request $request)
    {
        $path = storage_path() . "/app/loithe.json";
        $current_data = file_get_contents($path);
        $json = json_decode($current_data, true);
        $item = array("id" => $request->id, "name" => $request->name, "link" => $request->link);

        $loithe = array();
        foreach ($json as $key => $value) {
            if ($id == $value["id"]) {
                array_push($loithe, $item);
            } else {
                array_push($loithe, $value);
            }
        }
        $final_data = json_encode($loithe);  
        file_put_contents($path, $final_data);
        return view('admin.loithe.danhsach',compact('loithe'));
    }

    public function getXoa($id)
    {
        $path = storage_path() . "/app/loithe.json";
        $current_data = file_get_contents($path);
        $loithe = json_decode($current_data, true);
        $arr_index = 0;

        foreach($loithe as $key => $value) {
            if ($value['id'] == $id) {
                $arr_index=$key;
            }
        }

        unset($loithe[$arr_index]);
       
        $final_data = json_encode($loithe); 
        file_put_contents($path,$final_data);

        return redirect()->route('admin.loithe.danhsach');
    }
}
