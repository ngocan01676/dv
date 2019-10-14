<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;


class Slidercontroller extends Controller
{
	public function getdanhsach()
	{   
		$slider=Slide::all();
		return view('admin/slide/danhsach',['slide'=>$slider]);
	}
        public function home()
    {   
        
        return view('admin/slide/homes');
    }
	public function getthem()
	{
		return view('admin/slide/them');
	}
	public function postthem(Request $r)
	{  
  
        $this->validate($r,
        	[
               'txtten'=>'required|min:5|max:500',
               'txtnoidung'=>'required|min:5|max:500',
        	],
        	[

                'txtteb.required'=>'không được để trống tên',
                'txtnoidung.required'=>'không được để trống nội dung'

        	]);
        $slide=new Slide;
        $slide->Ten=$r->txtten;
        $slide->NoiDung=$r->txtnoidung;
        $slide->Link=$r->txtlink;
        if($r->hasFile('txthinh'))
        	{
        		$file=$r->file('txthinh');
        		$name=$file->getClientOriginalName();
        		$r_name=str_random(4)."_".$name;
        		$file->move('upload/slide',$r_name);
        		$slide->Hinh=$r_name;
        	}
        	$slide->save();
             return redirect('admin/slide/danhsach');


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
