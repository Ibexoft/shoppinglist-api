<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'icon'
    ];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
}
