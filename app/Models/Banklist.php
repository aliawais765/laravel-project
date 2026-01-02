<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banklist extends Model
{
    use HasFactory;
  protected $table = 'banklists';

    protected $fillable = [ 'title', 'image', 'description' ];

}
