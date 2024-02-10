<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function new_ticket(){
        return $this->hasMany(NewTicket::class);
    }

    public function money_receipt(){
        return $this->hasMany(MoneyRecipt::class);
    }
}
