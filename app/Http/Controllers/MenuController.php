<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getDanhSach()
    {
        $path = storage_path() . "/app/menu.json";
        $menu = json_decode(file_get_contents($path), true);
        return view('admin.menu.danhsach',compact('menu'));
    }

    public function getThem()
    {
    	return view('admin.menu.them');
    }

    public function postThem()
    {
        $path = storage_path() . "/app/menu.json";
        $current_data = file_get_contents($path);  
        $array_data = json_decode($current_data, true);  
        $last_item    = end($array_data);
        $last_item_id = $last_item['id'];
        $extra = array(  
            'id'             => ++$last_item_id,
            'name'          =>     $_POST["name"],  
            'link'     =>     $_POST["link"]  
        );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        file_put_contents($path, $final_data);
        return view('admin/menu/them',compact('final_data'));   
    }

    public function getSua($id)
    {
        $data = [
            'id' => $id,
            'name' => 'Menu sadsadsad',
            'link' => 'Link 1',
        ];
    	return view('admin.menu.sua', compact('data'));
    }

    public function postSua($id, Request $request)
    {
        $path = storage_path() . "/app/menu.json";
        $current_data = file_get_contents($path);
        $json = json_decode($current_data, true);
        $item = array("id" => $request->id, "name" => $request->name, "link" => $request->link);

        $menu = array();
        foreach ($json as $key => $value) {
            if ($id == $value["id"]) {
                array_push($menu, $item);
            } else {
                array_push($menu, $value);
            }
        }
        $final_data = json_encode($menu);  
        file_put_contents($path, $final_data);
        return view('admin.menu.danhsach',compact('menu'));
    }

    public function getXoa($id)
    {
        $path = storage_path() . "/app/menu.json";
        $current_data = file_get_contents($path);
        $menu = json_decode($current_data, true);
        $arr_index = 0;

        foreach($menu as $key => $value) {
            if ($value['id'] == $id) {
                $arr_index=$key;
            }
        }

        unset($menu[$arr_index]);
        
        $final_data = json_encode($menu); 
        file_put_contents($path,$final_data);

        return redirect()->route('admin.menu.danhsach');
    }
}
