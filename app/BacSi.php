<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BacSi extends Model
{
    protected $table="bacsi";
   public function khoa()
    {
    	return $this->belongsTo("App\Khoa",'idKhoa','id');
    }

    
}
