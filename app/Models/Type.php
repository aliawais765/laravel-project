<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bankloan;
class Type extends Model

{
    use HasFactory;

     
    protected $table = 'types'; 
    protected $fillable = ['name' ];
    public function bankloan(){  
       return $this->hasMany('App\Models\Bankloan','type');
    }
}
 