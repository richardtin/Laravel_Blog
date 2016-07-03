<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title',
        'sub_title',
        'content',
        'is_feature',
        'page_view',
    ];

    public function post() {
        return $this->belongsTo('\App\Post');
    }
}
