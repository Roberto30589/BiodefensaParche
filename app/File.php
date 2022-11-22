<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{   
    protected $fillable = [
        'client_id',
        'filetype_id',
        'joborder_id',
        'date',
        'uri',
        'description',
        'name',
        'version',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
