<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'retail_price',
        'wholesale_price',
        'min_wholesale_qty',
        'quantity',
        'photo'
    ];

    //Belongs to a category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    //Belongs to many users, untuk fitur cart
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'product_user');
    }
}
