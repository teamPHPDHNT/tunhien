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
    public function getSua()
    {
    	return view('admin.slide.sua');
    }
}
