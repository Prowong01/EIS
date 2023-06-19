<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'tb_productscategory';
    protected $primaryKey = 'ctg_id';
    public $timestamps = false;
    protected $fillable = [
        'ctg_desc',
        'ctg_text'
    ];
}
