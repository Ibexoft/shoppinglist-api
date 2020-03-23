<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    // TODO: shopping list products could also be a separate child model
    public function product_lists()
    {
        return $this->belongsToMany('App\ProductVariant', 'shopping_list_products', 'shopping_list_id', 'variant_id')
            ->withPivot('quantity', 'branch_id', 'buying_date', 'buying_price')
            ->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
