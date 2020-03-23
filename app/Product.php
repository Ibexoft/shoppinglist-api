<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'brand'
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function variants()
    {
        return $this->hasMany('App\ProductVariant');
    }

    public function meta()
    {
        return $this->hasMany('App\ProductMeta');
    }

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
}
