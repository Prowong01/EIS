<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $table = 'tb_purchaseorders';
    protected $primaryKey = 'po_id';
    public const CREATED_AT = 'po_cdate';
    public const UPDATED_AT = null;
    public function PurchaseRequest(): BelongsTo
    {
        return $this->belongsTo(PurchaseRequest::class,  'po_prID');
    }
    protected $fillable = [
        'po_no',
        'po_paymentTerm',
        'po_buyer',
        'po_deliveryTo'
    ];
}
