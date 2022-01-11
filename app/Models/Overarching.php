<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overarching extends Model
{
    protected $table = "overarching";

    public function getMicrophoneReading() {
        return $this->belongsTo(Microphone::class, 'decibel', 'decibel');
    }
}
