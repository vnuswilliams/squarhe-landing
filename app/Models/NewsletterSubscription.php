<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscription extends Model
{
    protected $fillable = [
        'email',
        'consent',
        'subscribed_at',
    ];

    protected function casts(): array
    {
        return [
            'consent' => 'boolean',
            'subscribed_at' => 'datetime',
        ];
    }
}
