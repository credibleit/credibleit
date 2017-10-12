<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delinquent extends Model
{
    protected $table = 'delinquent';
    protected $fillable = [
        'due_id', 'amount',
    ];
    
    public function due()
    {
        return $this->belongsTo('App\Due');
    }
}
