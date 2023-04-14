<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'maLoaiPhong',
        'soPhong    ',
        'giaPhong',
        'status',
        'hinhAnhPhong',
    ];
    protected $primaryKey = 'maPhong';
    protected $table = 'phongs';
}
