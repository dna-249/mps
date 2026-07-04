<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaPost extends Model
{
    public function getIsExpiredAttribute()
{
    return now()->greaterThan($this->deadline);
}
}
