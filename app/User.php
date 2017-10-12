<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'coop_branch_id','firs_name','last_name','middle_name','birthday','address','email','contact_no','username','user_type_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdministrator()
    {
        return $this->attributes['role_id'] == 1;
    }

    public function type()
    {
        return $this->belongsTo('App\UserType','user_type_id');   
    }
    
    public function meta()
    {
        return $this->hasMany('App\UserMeta');
    }

    public function redbook()
    {
        $this->hasMany('App\Redbook','blocked_by');
    }
    
    public function dues()
    {
        return $this->hasMany('App\Due');
    }
    
    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }
    
    public function card()
    {
        return $this->hasOne('App\Card');
    }
}
