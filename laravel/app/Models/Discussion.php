<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        // 'user_id',
        'discussion_title',
        'discussion_content',
        'discussion_comments',
        'user_name',
        'user_type'
    ];
}
