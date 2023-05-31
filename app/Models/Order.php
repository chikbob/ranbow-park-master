<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory, Notifiable;

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }

    protected $fillable = [
        'ticket_id',
        'email',
        'hash'
    ];
}
