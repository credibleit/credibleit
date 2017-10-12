<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchMeta extends Model
{
    protected $table = 'coop_meta';
    
    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }
}
