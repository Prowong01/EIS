<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRStatus extends Model
{
    use HasFactory;

    protected $table = 'tb_purchaserequeststatus';
    protected $primaryKey = 'ps_id';
    public $timestamps = false;
    protected $fillable = ['ps_desc'];
}
