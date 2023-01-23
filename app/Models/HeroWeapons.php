<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroWeapons extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'hero_id',
        'weapon_id'
    ];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class);
    }

    public function hero()
    {
        return $this->belongsTo(Hero::class);
    }
}
