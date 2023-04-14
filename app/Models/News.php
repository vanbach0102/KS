<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'news_title',
        'news_desc',
        'news_content',
        'news_meta_desc',
        'news_meta_keyword',
        'news_status',
        'news_image',
        'news_slug  ',


    ];
    protected $primaryKey = 'news_id';
    protected $table = 'tbl_news';
}
