<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInquiry extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'email',
        'service',
        'notes',
        'agreed_at',
        'ip_address',
        'user_agent',
        'mail_sent_at',
        'mail_error',
    ];

    protected function casts(): array
    {
        return [
            'agreed_at' => 'datetime',
            'mail_sent_at' => 'datetime',
        ];
    }

    public function getFullNameAttribute(): string
    {
        return trim("{$this->first_name} {$this->last_name}");
    }
}
