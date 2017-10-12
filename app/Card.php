<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
	use SoftDeletes;
    protected $table = 'card';
    
    public function holder()
    {
        return $this->belongsTo('App\User','user_id');
    }
    
    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }
    
    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
}
