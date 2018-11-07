<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','dimension','angle','puissance','flux_lumineux','alimentation',
        'tcoulor','module','poids','lumens' ,'battery','sub_category_id','technical_details','image1' ,'image2','image3'];
    protected $hidden = [
      //  'id'
    ];
    public $timestamps = false;

    public function SubCategory()
    {
        return $this->belongsTo('App\SubCategory' , 'sub_category_id');
    }
}
