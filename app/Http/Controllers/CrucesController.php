<?php

namespace App\Http\Controllers;

use App\Models\Rps;
use App\Models\Ri;
use App\Models\Simat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrucesController extends Controller
{
    public function estadoMatricula(){
        $rps = DB::table('Rps')->get();
        $ri = DB::table('Ris')->get();

       // $combinado = 
        return json_decode($rps);
    }
}
