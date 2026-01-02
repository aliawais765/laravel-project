<?php

namespace App\Models;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankloan extends Model
{
    use HasFactory;
       protected $table = 'bankloans';

    protected $fillable =   [
    'bank',
    'amount',
    'interest',
    'tenure_years',
    'notes',
    'type',];
    public function bankloan(){
        return $this->belongsTo(Type::class);
    }
}
