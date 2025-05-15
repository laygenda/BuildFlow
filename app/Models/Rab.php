<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Rab extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'contractor_id', 'file_upload', 'status'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }

    public function items()
    {
        return $this->hasMany(RabItem::class);
    }
}

