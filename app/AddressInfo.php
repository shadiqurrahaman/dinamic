<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressInfo extends Model
{
    public function addressList()
    {
    	return $this->belongsTo('App\AddressList');
    }
}
