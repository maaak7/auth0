<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public function status(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(FileStatus::class, 'status_id', 'id');
    }
}
