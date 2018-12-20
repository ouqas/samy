<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title','description'];
    public $timestamps = false;
    protected $hidden = [
      //  'id'
    ];

    public function SubCategories()
    {
        return $this->hasMany('App\SubCategory' ,'category_id');
    }
}
