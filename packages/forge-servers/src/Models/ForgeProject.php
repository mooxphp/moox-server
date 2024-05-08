<?php

namespace Moox\ForgeServer\Models;

use Illuminate\Database\Eloquent\Model;

class ForgeProject extends Model
{
    protected $table = 'forge_projects';

    protected $fillable = [
        'title',
        'url',
        'server_id',
        'site_id',
        'behind',
        'last_deployment',
        'commit',
        'commit_message',
        'commit_author',
    ];

    protected $casts = [
        'last_deployment' => 'datetime',
    ];

    public function server()
    {
        return $this->belongsTo(ForgeServer::class, 'server_id', 'forge_id');
    }
}
