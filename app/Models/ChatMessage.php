<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;

    public $fillable = [
        'body',
        'sender_id',
        'recepient_id',
        'chat_id',
    ];

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }
}
