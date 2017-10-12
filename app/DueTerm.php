<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DueTerm extends Model
{
    protected $table = 'dueterm';
    protected $fillable = [
        'due_id', 'amount', 'due_date'
    ];
    
    public function due()
    {
        return $this->belongsTo('App\Due');
    }
}
