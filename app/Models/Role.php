<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $guarded = [];

    protected $table = 'roles';

    public $timestamps = true;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
