<?php

namespace App;
use App\Models\Profesion; 
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
    'is_admin'=>'boolean'
    ];

    public function articles()    {
         return $this->hasMany('App\Article');
    } 

    public function profesion() {
            return $this->belongsTo(Profesion::class); // relaciona el objeto profesion 
    }

    public function isAdmin(){        
        return      $this->email === 'darriolavilla@hotmail.com';
    }

    public static function findByEmail($email) { 
            return static::where(compact('email'))->first();  
    }
}
