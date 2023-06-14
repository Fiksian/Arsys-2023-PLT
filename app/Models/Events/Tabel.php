<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabel extends Model
{
    use HasFactory;
    protected $fillable = ['Event_Name', 'Event_Date', 'Application_Deadline', 'Draft_Deadline', 'Seats'];
    protected $table = 'event';

}