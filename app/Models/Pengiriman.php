<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = 'pengiriman';
    protected $guarded = ['id'];
    protected $with = ['sopirs'];

    public function sopirs()
    {
        return $this->belongsTo(Sopir::class,'id_supir');
    }
}
