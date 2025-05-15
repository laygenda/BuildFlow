<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'company_name', 'description', 'legal_docs', 'rating_avg'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function rabs()
    {
        return $this->hasMany(Rab::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function dailyReports()
    {
        return $this->hasMany(DailyReport::class);
    }
}

