<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $table = 'provider';

    public function Address()
    {
        return $this->hasMany(Address::class, 'provider_id', 'id');
    }
}
