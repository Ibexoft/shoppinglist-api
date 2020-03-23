<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'logo'
    ];

    public function branches()
    {
        return $this->hasMany('App\StoreBranch');
    }

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
}
