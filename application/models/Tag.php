<?php namespace Application\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function Blog()
    {
        return $this->belongsToMany('Application\Models\Blog');
    }
}