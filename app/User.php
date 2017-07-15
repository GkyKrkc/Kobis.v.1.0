<?php

namespace App;

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
        'name', 'email', 'password'
    ];
    /*protected $guarded = [
        'rol'
    ];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admin_mi(){

        if($this->rol=='admin'){
            return true;
        }
        return false;
    }

    public function doktor(){

        if($this->rol=='doktor'){
            return true;
        }
        return false;
    }

    public function supervizor(){

        if($this->rol=='supervizor'){
            return true;
        }
        return false;
    }

    public function koordinasyon(){

        if($this->rol=='koordinasyon'){
            return true;
        }
        return false;
    }

    public function cagri(){

        if($this->rol=='cagri'){
            return true;
        }
        return false;
    }


    public function roles(){
      return  $this->belongsToMany("App\Role","role_user");
    }

    public function yetkisi_var_mi($yetki){
       foreach ($this->roles()->get() as $role){

           if($role->name==$yetki){
               return true;
               break;
           }
       }
       return false;

    }

    public function akis()
    {
        return $this->hasMany('App\Time','user_id','id');
    }

}
