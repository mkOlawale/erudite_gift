<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class canadaproduct extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'Description', 'price', 'Category', 'image'];
}
