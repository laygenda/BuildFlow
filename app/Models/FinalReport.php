<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalReport extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'description', 'photo', 'stage', 'total_expense', 'submitted_at'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

