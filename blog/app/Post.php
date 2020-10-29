<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{

    use SoftDeletes;
    protected $dates=['deleted_at'];

    protected $fillable=['title','content','image','category_id'];
    public function category(){
        return $this->belongsTo('App\Category');
    }
}


