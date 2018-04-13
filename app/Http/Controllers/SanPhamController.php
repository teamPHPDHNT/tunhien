<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function getDanhSach()
    {   
        $path = storage_path() . "/app/sanpham.json";
        $menu = json_decode(file_get_contents($path), true);
        return view('admin.sanpham.danhsach',compact('sanpham'));
    }
    public function getThem()
    {
    	return view('admin.sanpham.them');
    }
    public function getSua()
    {
    	return view('admin.sanpham.sua');
    }
}
