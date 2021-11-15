<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    use HasFactory;


    protected $fillable = [
        'fd_name', 'fd_type', 'fd_amount', 'fd_pricebox' , 'fd_amountbox'
    ];


}
