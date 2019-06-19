<?php namespace Application\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function comment()
    {
        return $this->hasMany('\Application\Models\Comment');
    }

    public function category()
    {
        return $this->hasOne('Application\Models\Category');
    }

    public function tag()
    {
        return $this->hasMany('Application\Models\Tag');
    }
}