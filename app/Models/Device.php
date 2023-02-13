<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'imei',
        'status',
        'name',
        'pos_sim_number',
        'agent_id',
        'terminal_id',
        'serial_number',
        'pos_type',
    ];

}
