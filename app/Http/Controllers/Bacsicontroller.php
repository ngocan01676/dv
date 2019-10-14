<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BacSi;
use App\Khoa;


class Bacsicontroller extends Controller
{
	public function getdanhsach()
	{   
		$bacsi=bacsi::all();
		return view('admin/bacsi/danhsach',['bacsi'=>$bacsi]);
	}
	public function getthem()

	{
        $khoa=Khoa::all();
		return view('admin/bacsi/them',['khoa'=>$khoa]);
	}
	public function postthem(Request $r)
	{  
  
        $this->validate($r,
        	[
               'txtten'=>'required|min:5|max:500',
               'txtnoidung'=>'required|min:5|max:500',
        	],
        	[

                'txtten.required'=>'không được để trống tên',
                'txtnoidung.required'=>'không được để trống nội dung'

        	]);
        $bacsi=new bacsi;
        $bacsi->name=$r->txtten;
        $bacsi->noidung=$r->txtnoidung;
        $bacsi->chuyenkhoa=$r->txtlink;
        $bacsi->idUser=0;
        $bacsi->idKhoa=$r->txtkhoa;
        if($r->hasFile('txthinh'))
        	{
        		$file=$r->file('txthinh');
        		$name=$file->getClientOriginalName();
        		$r_name=str_random(4)."_".$name;
        		$file->move('upload/khoa',$r_name);
        		$bacsi->image=$r_name;
        	}
        	$bacsi->save();
             return redirect('admin/bacsi/danhsach');


	}
	public function getsua($id)

	{   

	}
	public function postsua(Request $r,$id)
	{


	}
	public function getxoa($id)
	{

	}
}
