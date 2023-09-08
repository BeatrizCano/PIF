<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 *
 * @property $id
 * @property $category_id
 * @property $name
 * @property $authors
 * @property $description
 * @property $language
 * @property $publisher
 * @property $year
 * @property $isbn
 * @property $image
 * @property $price
 * @property $stock
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Book extends Model
{
    
    static $rules = [
		'category_id' => 'required',
		'name' => 'required',
		'authors' => 'required',
		'description' => 'required',
		'language' => 'required',
		'publisher' => 'required',
		'year' => 'required',
		'isbn' => 'required',
		'image' => 'required',
		'price' => 'required',
		'stock' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id','name','authors','description','language','publisher','year','isbn','image','price','stock','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    
    public function bookUser()
    {
    return $this->hasMany(BookUser::class);
    }

}
