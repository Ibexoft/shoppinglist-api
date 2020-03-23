<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unit', 'quantity', 'mrp'
    ];

    public function meta()
    {
        return $this->hasMany('App\ProductVariantMeta');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function store_prices()
    {
        return $this->belongsToMany('App\StoreBranch', 'store_branches', 'variant_id', 'branch_id')
            ->withPivot('price', 'created_by')
            ->withTimestamps();
    }

    public function shopping_lists()
    {
        return $this->belongsToMany('App\ShoppingList', 'shopping_list_products', 'variant_id', 'shopping_list_id')
            ->withPivot('quantity', 'branch_id', 'buying_date', 'buying_price')
            ->withTimestamps();
    }
}
