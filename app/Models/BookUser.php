<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookUser extends Model
{
    use HasFactory;

    protected $table = 'book_user';
    
    protected $fillable = [
        'book_id',
        'user_id',
        'loan_date',
        'return_date',
        'status',
    ];

    public static $rules = [
        'book_id' =>'required',
        'user_id' =>'required',
    ];

    public function book()
    {
    return $this->belongsTo(Book::class, 'book_id');
    }

    public function user()
    {
    return $this->belongsTo(User::class, 'user_id');
    }

    public function bookLoan()
    {
        return $this->hasOne(BookLoan::class, 'book_user_id');
    }
}
