<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //

    protected $fillable = ['name', 'email', 'subject', 'message', 'is_read'];
}
