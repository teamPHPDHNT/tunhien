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
    public function getSua()
    {
    	return view('admin.loithe.sua');
    }
}
