<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicant extends Model
{
    use HasFactory;

    public function applicationransaction()
    {
        return $this->hasMany(applicationtransaction::class);
    }
}
