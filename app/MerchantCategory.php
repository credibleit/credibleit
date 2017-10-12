<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantCategory extends Model
{
    protected $table = 'merchant_category';
    
    public function merchants()
    {
        return $this->hasMany('App\Merchant');
    }
}
