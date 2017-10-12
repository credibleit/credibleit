<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Due extends Model
{
    protected $table = 'due';
    protected $fillable = [
        'user_id', 'amount', 'due_date'
    ];
    
    public function dueTerm()
    {
        return $this->hasMany('App\DueTerm');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function deliquent()
    {
        return $this->hasMany('App\Deliquent');
    }
}
