<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'user_id'];

    public function user()
    {
        $this->belongsTo(User::class);
    }

}
