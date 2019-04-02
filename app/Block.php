<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'blocks';
    protected $fillable = [
        'topic_id', 'title', 'content', 'image_path', 'created_at', 'updated_at',
    ];
}
