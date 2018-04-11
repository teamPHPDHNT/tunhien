<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class DemoController extends Controller
{
	public function getInfoUser($idUser){
	    // Nhận tham số truyền vào là id user
		$var = file_get_contents(storage_path('/app/menu.json'));
		$var = json_decode($var,true);
		$var = file_put_contents(storage_path('/app/menu.json'), '{"id":1, "name":"TRANG CHỦ"},{"id":2, "name":"TỰ NHIÊN"}, {"id":3, "name":"ĐẠI PHÁT"}, {"id":4, "name":"DRCO.VN"}, {"id":5, "nam":"SPANATURAL"}');
		$var = json_decode($var);
	    return view('tunhien',compact('var'));
	}

}
