<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLinks extends Model
{
    use HasFactory;
    protected $fillable = ['id','custom_link_name','category','user','position','link'];
}
