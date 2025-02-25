<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccessLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'ip_address', 'accessed_at', 'pagina'];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


