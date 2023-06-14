<?php

namespace App\Models\Plt;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'created_at'];
    protected $table = 'arsys_announcement';
}
