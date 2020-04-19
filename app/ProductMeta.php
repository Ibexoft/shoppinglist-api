<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductMeta extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_meta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key', 'value'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
