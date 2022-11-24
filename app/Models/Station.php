<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "user_id"
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function StationAndFacility()
    {
        return $this->hasMany(StationAndFacility::class);
    }

    public function TrainAndStation()
    {
        return $this->hasMany(TrainAndStation::class);
    }
}
