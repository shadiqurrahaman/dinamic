<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressList extends Model
{
    public function file()
    {
    	return $this->belongsTo('App\FileList');

    }

    public function addressInfo()
    {
    	return $this->hasOne('App\AddressInfo', 'address_list_id');
    }
}
