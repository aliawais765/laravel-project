<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars'; // correct table name
    protected $fillable = ['bank', 'amount', 'interest', 'tenure_years', 'notes'];

}
