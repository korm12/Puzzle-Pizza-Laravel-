<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_details extends Model
{
    use HasFactory;
    /*
    etong model na ito parang naka mirror siya dun sa table sa database.

    yung pangalan ng model na item_details is same ng table name. 

    bale pag tinawag mo to sa controller automatic makukuha na agad lahat ng data na laman ng
    item_details.
    */
}
