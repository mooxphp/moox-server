<?php

namespace Moox\ForgeServer\Models;

use Illuminate\Database\Eloquent\Model;

class ForgeServer extends Model
{
    protected $table = 'forge_servers';

    protected $fillable = [
        'name',
        'started_at',
        'finished_at',
        'failed',
    ];

    protected $casts = [
        'failed' => 'bool',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];
}
