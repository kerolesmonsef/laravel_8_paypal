<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed title
 * @property mixed description
 * @property mixed id
 */
class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
}
