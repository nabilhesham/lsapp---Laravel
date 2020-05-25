<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';

    // Primary key
    public $primaryKey = 'id';

    // add timestamps
    public $timestamps = true;

    // relation between the user and post
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
