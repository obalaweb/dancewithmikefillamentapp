<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'dance_class_id',
        'title',
        'content',
        'video',
    ];


    public function danceClass (): BelongsTo
    {
        return $this->BelongsTo(DanceClass::class);
    }
}
