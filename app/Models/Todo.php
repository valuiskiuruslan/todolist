<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'completed',
    ];
}
