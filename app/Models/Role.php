<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestaps = false;
    protected $fillable = [
        'name'
    ];
    protected $primaryKey = 'role_id';
    protected $table = 'roles';

    public function admin(){
        return $this->belongsToMany('App\Models\Admin');
    }
}
