<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trading extends Model
{
    use HasFactory;
    const TRADE_SELL=0;
    const TRADE_BUY=1;
    const TRADE_EXCHANGE=2;
    const PENDING="PENDING";
    const PROCESSING="PROCESSING";
    const ACCEPTED="ACCEPTED";
    const DENIED="DENIED";
    public function crypto()
    {
        return $this->belongsTo(CryptoMonaire::class,'crypto_id','id');
    }
}
