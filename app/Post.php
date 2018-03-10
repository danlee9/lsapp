<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts'; // if you want to change table name to something else

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;
}
