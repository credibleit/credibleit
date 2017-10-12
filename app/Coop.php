<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coop extends Model
{
	use SoftDeletes;
    protected $table = 'coop';
    protected $fillable = [
        'name', 'address', 'contact_no'
    ];
    
    public function branches()
    {
        return $this->hasMany('App\Branch');
    }
}
