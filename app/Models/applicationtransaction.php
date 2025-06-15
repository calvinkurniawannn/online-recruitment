<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicationtransaction extends Model
{
    use HasFactory;
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    public function jobApplication()
    {
        return $this->belongsTo(JobApplication::class);
    }
}
