<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'codUtente';
}
