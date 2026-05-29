<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactLead extends Model
{
    protected $fillable = [
        'company_name',
        'full_name',
        'email',
        'phone',
        'employees_count',
        'message',
        'consent',
    ];

    protected function casts(): array
    {
        return [
            'consent' => 'boolean',
        ];
    }
}
