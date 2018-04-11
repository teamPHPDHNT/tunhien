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
    public function postThem(Request $request)
    {
        $ten=$request->input('name');
        $ddan=$request->input('link');
        $path = storage_path() . "/app/menu.json";
        $menu['menu']=[['id'=>1,'name'=>$ten,'link'=>$ddan]];
        $var = file_put_contents($path,json_encode($menu));
        return view('admin/menu/them',compact('menu')); 
    }
    public function getSua()
    {
    	return view('admin.menu.sua');
    }
}
