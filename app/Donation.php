<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Donation extends Model
{

    public $table = 'donations';
    public $fillable = [
        'type',
        'currency',
        'amount',
        'full_name',
        'country',
        'city',
        'address',
        'email',
        'phone_number',
        'payment_method',
        'card_holder_name',
        'card_number',
        'card_end_date',
        'card_cvc'
    ];
    
}
