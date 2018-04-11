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
    public function getSua()
    {
    	return view('admin.baiviet.sua');
    }
}
