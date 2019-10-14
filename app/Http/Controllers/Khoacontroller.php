<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Khoa;


class Khoacontroller extends Controller
{
	public function getdanhsach()
	{   
		$khoa=Khoa::all();
		return view('admin/khoa/danhsach',['khoa'=>$khoa]);
	}
	public function getthem()
	{
		return view('admin/khoa/them');
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
        $khoa=new Khoa;
        $khoa->Name=$r->txtten;
        $khoa->noidung=$r->txtnoidung;
        $khoa->Names=$r->txtlink;
        if($r->hasFile('txthinh'))
        	{
        		$file=$r->file('txthinh');
        		$name=$file->getClientOriginalName();
        		$r_name=str_random(4)."_".$name;
        		$file->move('upload/khoa',$r_name);
        		$khoa->image=$r_name;
        	}
        	$khoa->save();
             return redirect('admin/khoa/danhsach');


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
