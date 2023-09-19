<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'module_title',
        'course_id',
        'module_description',
        'module_duration',
        'module_credits',
        'module_prerequisites',
        'module_status'
    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }

}
