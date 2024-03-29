<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['eventName','date','location'];
    public function guests(){
        return $this->hasMany(Guest::class);
    }
}
