<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redbook extends Model
{
    protected $table = 'redbook';
    protected $fillable = [
        'card_id', 'detail','blocked_by'
    ];

    public function card()
    {
    	$this->belongsTo('App\Card');
    }

    public function blockedBy()
    {
    	$this->belongsTo('App\User','blocked_by');
    }
}
