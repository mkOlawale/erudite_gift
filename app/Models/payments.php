<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'amount', 'status', 'ref_id', 'trans_id'];
}
