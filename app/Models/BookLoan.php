<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookLoan extends Model
{
    use HasFactory;

    public static $rules = [
        'book_user_id' => 'required',
        'loan_date' => 'required|date',
        'return_date' => 'required|date|after:loan_date',
    ];
    
}
