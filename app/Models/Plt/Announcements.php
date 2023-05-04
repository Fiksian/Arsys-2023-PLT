<?php

namespace App\Models\Plt;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body'];
    protected $table = 'arsys_announcement';
}
