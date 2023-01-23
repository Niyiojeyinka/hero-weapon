<?php

namespace App\Models;

use App\Models\Hero;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Weapon extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'damage', 'is_range'];

    public function heroes()
    {
        return $this->belongsToMany(Hero::class, 'hero_weapons', 'weapon_id', 'hero_id');
    }

}
