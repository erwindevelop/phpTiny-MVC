<?php namespace Application\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Blog()
    {
        return $this->belongsToMany('Application\Models\Blog');
    }
}