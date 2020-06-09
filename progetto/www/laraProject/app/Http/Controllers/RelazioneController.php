<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelazioneController extends Controller
{
    public function downloadRelazione()
    {
       return response()->download(public_path('Relazione.pdf'), 'Relazione_grp_14.pdf');
    }
}
