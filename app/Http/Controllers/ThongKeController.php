<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    public function getDanhSach()
    {
    	return view('admin.thongke.danhsach');
    }
    public function getThem()
    {
    	return view('admin.thongke.them');
    }
    public function getSua()
    {
    	return view('admin.thongke.sua');
    }
}
