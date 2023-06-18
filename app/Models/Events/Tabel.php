<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel extends Model
{
    use HasFactory;
    protected $fillable = ['event_id', 'event_eate', 'application_Deadline', 'draft_deadline', 'quota'];
    protected $table = 'arsys_event';

}