<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';

    public function Address()
    {
        return $this->hasOne(Address::class, 'sale_id', 'id');
    }

    public function Provider()
    {
        return $this->hasMany(Provider::class, 'id', 'provider');
    }
}
