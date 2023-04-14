<?php

namespace App\Models;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestaps = false;
    protected $fillable = [
        'admin_email',
        'admin_password',
        'admin_name',
        'admin_phone',

    ];
    protected $primaryKey = 'admin_id';
    protected $table = 'admins';

    public function role(){
        return $this->belongsToMany('App\Models\Role');
    }
    public function getAuthPassword()
    {
        return $this->admin_password;
    }
    public function hasAnyRole($role){
        return null !== $this->role()->whereIn('name',$role)->first();
    }
    public function hasRole($role){
        return null !== $this->role()->where('name',$role)->first();
    }
}
