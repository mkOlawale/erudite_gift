<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usaproduct extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'Description', 'price', 'Category', 'image'];
}
