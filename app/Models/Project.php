<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    public $table = 'projects';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'slug',
        'owner',
        'phone',
        'price',
        'land_number',
        'address',
        'area',
        'huong',
        'road',
        'juridical',
        'status',
        'photo',
        'content',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function project_categories()
    {
        return $this->belongsToMany(ProjectCategory::class);
    }

    public function project_locations()
    {
        return $this->belongsToMany(ProjectLocation::class);
    }
    
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}