<?php
use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    protected $fillable = ['id', 'post_id', 'user_id', 'content'];
    protected $hidden = ['creted_at', 'updated+at'];

    public function post(){
        return $this->belongsTo('App\Post');
    }
}