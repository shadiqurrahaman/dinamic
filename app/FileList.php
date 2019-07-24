<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileList extends Model
{
    public function adress()
    {
    	return $this->hasMany('App\AddressList');
    }
}
