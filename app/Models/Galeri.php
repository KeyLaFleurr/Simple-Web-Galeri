<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'table_galeri';
    
    protected $fillable = 
    ['title', 
    'content', 
    'featured_image'];
}
