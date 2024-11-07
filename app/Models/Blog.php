<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    public function Subscriber() {
        return $this->hasMany(SubScriber::class);
    }
}
