<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_cliente extends Model
{
    use HasFactory;

    public function tickets() {
        return $this->hasMany(tb_ticket::class, 'idTicket');
    }
}
