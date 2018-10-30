<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

    protected $fillable = ['title','description','category_id'];
    protected $hidden = [
        //'id'
    ];
    public $timestamps = false;

    public function Category()
    {
        return $this->belongsTo('App\Category' , 'category_id');
    }

    public function Products()
    {
        return $this->hasMany('App\Product' ,'sub_category_id');
    }
}
