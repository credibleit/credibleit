<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoopMeta extends Model
{
    protected $table = 'coop_meta';
    
    public function coop()
    {
        return $this->belongsTo('App\Coop');
    }
}
