<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class C1 extends Model
{
    protected $fillable = ['hour_start','session','first_name','last_name','email'];

    
    /*  php artisan make model:Kathir -m     */
    /* m is the migration file */
}
