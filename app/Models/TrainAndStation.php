<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainAndStation extends Model
{
    use HasFactory;

    protected $fillable = [
        'train_id',
        'station_id',
        'arrival',
        'late',
        'delay'
    ];
}
