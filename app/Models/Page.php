<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    use HasFactory;

    public function template():BelongsTo{
        return $this->belongsTo(Template::class);
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
