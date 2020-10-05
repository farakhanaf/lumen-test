<?php
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $fillable = ['id', 'user_id', 'title', 'content'];
    protected $hidden = ['creted_at', 'updated+at'];

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}