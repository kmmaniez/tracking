<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkpoint extends Model
{
    use HasFactory;
    protected $table = 'checkpoints';
    protected $primaryKey = 'id_cp';
    protected $guarded = ['id'];
    protected $keyType = 'string';
    public $incrementing = false;
}
