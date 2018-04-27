<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function getDanhSach()
    {
        $path = storage_path() . "/app/slide.json";
        $slide = json_decode(file_get_contents($path), true);
        return view('admin.slide.danhsach',compact('slide'));
    }
    public function getThem()
    {
    	return view('admin.slide.them');
    }
    public function postThem()
    {
        $path = storage_path() . "/app/slide.json";
        $current_data = file_get_contents($path);  
        $array_data = json_decode($current_data, true);  
        $last_item    = end($array_data);
        $last_item_id = $last_item['id'];
        $extra = array(  
            'id'             => ++$last_item_id, 
            'images'     =>     $_POST["images"]  
        );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        file_put_contents($path, $final_data);
        return view('admin/slide/them',compact('final_data'));   
    }
    public function getSua($id)
    {
        $data = [
            'id' => $id,
            'images' => 'Menu sadsadsad',
        ];
        return view('admin.slide.sua', compact('data'));
    }

    public function postSua($id, Request $request)
    {
        $path = storage_path() . "/app/slide.json";
        $current_data = file_get_contents($path);
        $json = json_decode($current_data, true);
        $item = array("id" => $request->id, "images" => $request->images);

        $slide = array();
        foreach ($json as $key => $value) {
            if ($id == $value["id"]) {
                array_push($slide, $item);
            } else {
                array_push($slide, $value);
            }
        }
        $final_data = json_encode($slide);  
        file_put_contents($path, $final_data);
        return view('admin.slide.danhsach',compact('slide'));
    }

    public function getXoa($id)
    {
        $path = storage_path() . "/app/slide.json";
        $current_data = file_get_contents($path);
        $slide = json_decode($current_data, true);
        $arr_index = 0;

        foreach($slide as $key => $value) {
            if ($value['id'] == $id) {
                $arr_index=$key;
            }
        }

        unset($slide[$arr_index]);
        
        $final_data = json_encode($slide); 
        file_put_contents($path,$final_data);

        return redirect()->route('admin.slide.danhsach');
    }
}
