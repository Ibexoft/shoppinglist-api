<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreBranch extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'map_location', 'created_by',
    ];

    public function store()
    {
        return $this->belongsTo('App\Store');
    }

    public function product_prices()
    {
        return $this->belongsToMany('App\ProductVariant', 'store_branches', 'branch_id', 'variant_id')
            ->withPivot('price', 'created_by')
            ->withTimestamps();
    }

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
}
