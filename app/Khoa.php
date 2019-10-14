<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    protected $table="khoa";
       public function bacsi()
   {
       return 	$this->hasMany("App\BacSi","idKhoa","id");
   }
    
}
