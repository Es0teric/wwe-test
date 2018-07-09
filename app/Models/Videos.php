<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $fillable = ['user_id', 'file_size', 'vid_format', 'duration', 'vid_bitrate', 'location', 'updated_at', 'created_at'];
    
    
}
