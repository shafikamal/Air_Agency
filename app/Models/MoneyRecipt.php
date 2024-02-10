<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class MoneyRecipt extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

}
