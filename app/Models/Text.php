<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Text
 * @package App\Models
 * @property int $id
 * @property text $text
 * @property text $description
 */
class Text extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

}
