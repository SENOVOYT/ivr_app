<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserCategory extends Model
{
    use HasFactory;
    protected $fillable = ['id','category_name','icon_id','user','position'];
    public function userlink(): HasMany
    {
        return $this->hasMany(UserLinks::class,'category_id')->orderBy('position');
    }
}
