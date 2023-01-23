<?php

namespace App\Models;

use App\Models\Weapon;
use App\Mail\SendLetterEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'health'];
    const ADMIN_EMAIL = 'admin@test.com';

    public function weapons()
    {
        return $this->belongsToMany(Weapon::class, 'hero_weapons', 'hero_id', 'weapon_id');
    }

    public function scopeGetDamage($query)
    {
        return $query->withSum('weapons', 'damage');
    }

    /**
     * model life cycle event listeners
     */
    public static function boot(){
        parent::boot();
        static::created(function ($hero){
            Mail::to(self::ADMIN_EMAIL)->send(new SendLetterEmail($hero));
        });
    }
}
