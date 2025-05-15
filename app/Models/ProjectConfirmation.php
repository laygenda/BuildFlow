<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class ProjectConfirmation extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'user_approved', 'contractor_approved', 'confirmed_at'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

