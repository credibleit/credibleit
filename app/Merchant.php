<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchant extends Model
{
	use SoftDeletes;
    protected $table = 'merchant';
    protected $fillable = [
        'merchant_category_id', 'name', 'address','contact_person','contact_no','code'
    ];
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
}
