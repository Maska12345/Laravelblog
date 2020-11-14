<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    

    protected $fillable = ['article_id','user_id','comment'];

    protected $dates = ['created_at','updated_at'];

    public function article()
{
    return $this->belongsTo('App\Article', 'article_id');
}
}
