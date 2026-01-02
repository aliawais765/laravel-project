<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeloan extends Model
{
    use HasFactory;

    protected $table = 'homeloans'; // correct table name
    protected $fillable = ['bank', 'amount', 'interest', 'tenure_years', 'notes'];
}

