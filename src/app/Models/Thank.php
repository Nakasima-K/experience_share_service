<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thank extends Model
{
    use HasFactory;
    protected $table = 'thanks';

    protected $fillable = [
        'user_id', 'post_id', 'ty_value'
    ];
}
