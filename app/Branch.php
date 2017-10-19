<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
	use SoftDeletes;
    protected $table = 'coop_branch';
    
    public function coop()
    {
        return $this->belongsTo('App\Coop');
    }
    
    public function members()
    {
        return $this->hasMany('App\User');
    }
    
    public function cards()
    {
        return $this->hasMany('App\Card');
    }

    public function managers()
    {
        return $this->members()->where('user_type_id', 2);
    }

    public function loanOfficers()
    {
        return $this->members()->where('user_type_id', 3);
    }

    public function customerService()
    {
        return $this->members()->where('user_type_id', 4);
    }

    public function collectors()
    {
        return $this->members()->where('user_type_id', 5);
    }

    public function legals()
    {
        return $this->members()->where('user_type_id', 6);
    }

    public function member()
    {
        return $this->members()->where('user_type_id', 7);
    }
}
