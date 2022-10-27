<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    public function vacancys()
    {
        return $this->belongsTo(Vacansy::class, 'vacancy_id');
    }
}
