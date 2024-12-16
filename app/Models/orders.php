<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\User;

class orders extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
        'user_id',
        'title', 
        'first_name', 
        'image', 
        'last_name', 
        'country',
        'state',
        'city',
        'address',
        'snumber',
        'Reciever_number',
        'notes',
        'status'
    ]; 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
