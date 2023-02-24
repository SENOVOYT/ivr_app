<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Permission\Models\Permission;

class UserLinks extends Model
{
    use HasFactory;
    protected $fillable = ['id','custom_link_name','category_id','position','permission_id'];
    public function permission(): BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }
    public function usercategory(): BelongsTo
    {
        return $this->belongsTo(UserCategory::class,'category_id');
    }

}
