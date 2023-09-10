<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookLoan extends Model
{
    use HasFactory;

    protected $fillable = ['loan_date', 'return_date']; 

    protected $table = 'book_loans';

    public function bookUser()
    {
        return $this->belongsTo(BookUser::class);
    }
}
