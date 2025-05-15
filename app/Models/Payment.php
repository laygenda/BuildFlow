<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'amount', 'type', 'method', 'proof', 'status', 'paid_at'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

