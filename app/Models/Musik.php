<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musik extends Model
{
    use HasFactory;

    protected $table = 'musik'; 
    protected $primaryKey = 'id';
    public $timestamps = false;
}
