<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'week_title',
        'file_name',
        'file_description',
        'file_path',
    ];
}
