<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariantMeta extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_variant_meta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key', 'value'
    ];

    public function variant()
    {
        return $this->belongsTo('App\ProductVariant', 'variant_id');
    }
}
