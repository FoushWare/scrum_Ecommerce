<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
       'quantity','manufacturer','title','price','weight','small-description','large_description','longitude','latitude'
    ];



    public function categories(){
        return $this->belongsToMany('App\Models\Categories','products_categories','product_id','category_id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function Tags(){
        return $this->belongsToMany('App\Models\Tags','product_tags','product_id','tag_id');
    }

    public function orders(){
        $this->belongsToMany('App\Models\Orders');
    }
}
