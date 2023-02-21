<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_ticket extends Model
{
    use HasFactory;

    public function clientes(){
        return $this->belongsTo(tb_cliente::class,'idcli');
    }
}
