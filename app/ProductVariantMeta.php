<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariantMeta extends Model
{
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
        return $this->belongsTo('App\ProductVariant');
    }
}
