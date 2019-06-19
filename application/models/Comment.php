<?php namespace Application\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function blog()
    {
        return $this->belongsTo('Application\Models\Blog');
    }

}