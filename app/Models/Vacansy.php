<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacansy extends Model
{
    use HasFactory;

    public function resumeies()
    {
        return $this->hasMany(Resume::class);
    }
}
