<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contractor_id',
        'service_id',
        'house_type_id',
        'location',
        'estimated_cost',
        'status',
    ];

    // 🔗 Relasi ke User (Pemilik proyek)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 🔗 Relasi ke Kontraktor
    public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }

    // 🔗 Relasi ke Layanan
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // 🔗 Relasi ke Tipe Rumah
    public function houseType()
    {
        return $this->belongsTo(HouseType::class);
    }

    // 🔗 Relasi ke RAB
    public function rab()
    {
        return $this->hasOne(Rab::class);
    }

    // 🔗 Relasi ke Daily Report
    public function dailyReports()
    {
        return $this->hasMany(DailyReport::class);
    }

    // 🔗 Relasi ke Final Report
    public function finalReports()
    {
        return $this->hasMany(FinalReport::class);
    }

    // 🔗 Relasi ke Review
    public function review()
    {
        return $this->hasOne(Review::class);
    }

    // 🔗 Relasi ke Pembayaran
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    // 🔗 Relasi ke Konfirmasi proyek
    public function confirmation()
    {
        return $this->hasOne(ProjectConfirmation::class);
    }
}
