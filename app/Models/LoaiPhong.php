<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiPhong extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'loaiPhong',
        'hinhAnh',
        'tinhTrang',
    ];
    protected $primaryKey = 'maLoaiPhong';
    protected $table = 'loai_phongs';

}
