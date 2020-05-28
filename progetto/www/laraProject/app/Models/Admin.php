<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'amministrazione';
    protected $primaryKey = 'codAdmin';

    protected $guarded = ['codAdmin'];
    protected $timeStamps = false;
}
