<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 *
 * @property $id
 * @property $category_id
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
 * @property $title
 *
 * @property BookUser[] $bookUsers
 * @property Category $category
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Book extends Model
{
    
    static $rules = [
		'category_id' => 'required',
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
		'title' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id','authors','description','language','publisher','year','isbn','image','price','stock','status','title'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookUsers()
    {
        return $this->hasMany('App\Models\BookUser', 'book_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    

}
