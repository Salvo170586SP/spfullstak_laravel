<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'img-url','position'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //FUNZIONA
    public static function boot()
    {
        parent::boot();
        //FUNZIONA
        static::creating(function ($project) {
            $lastPosition = Project::max('position');
            $project->position = $lastPosition + 1;
            Project::where('position', '>=', $project->position)->increment('position');
        });

        //FUNZIONA
        static::deleted(function ($project) {
            $project->updatePositionsOnDelete();
        });
    }

    //FUNZIONA
    public function updatePositionsOnDelete()
    {
        $deletedPosition = $this->position;
        Project::where('position', '>', $deletedPosition)
            ->orderBy('position')
            ->decrement('position');
    }
}
