<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    protected $fillable=['message',];
    protected $dispatchesevents=[
        'created'=>ChirpCreated::class
    ];
    use HasFactory;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
