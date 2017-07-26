<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title','slug','content'];
    protected $visible = ['title','slug','content'];
    public $timestamps = true;

    public function user()
    {
       return $this->belongsTo('App\User');
    }
}
