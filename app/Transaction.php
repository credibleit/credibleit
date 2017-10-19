<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
	use SoftDeletes;
    protected $table = 'transaction';
    protected $fillable = [
        'transaction_code', 'cardholder_id', 'merchant_id','transaction_type_id','amount',
    ];
    
    public function type()
    {
        return $this->belongsTo('App\TransactionType','transaction_type_id');
    }
    
    public function card()
    {
        return $this->belongsTo('App\Card');
    }
    
    public function merchant()
    {
        return $this->belongsTo('App\Merchant');
    }
}
