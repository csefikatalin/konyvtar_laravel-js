<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konyv;

class KonyvController extends Controller
{
    public function index()
    {
        $konyv = Konyv::all();

        return $konyv;
    }

    public function store(Request $request)
    {
        $konyv = new Konyv();
        $konyv->cim = $request->cim;
        $konyv->szerzo = $request->szerzo;
        $konyv->ar = $request->ar;
        $konyv->save();
    }




    public function update(Request $request, $konyvId)
    {
        $konyv = Konyv::find($konyvId);
        $konyv = new Konyv();
        $konyv->cim = $request->cim;
        $konyv->szerzo = $request->szerzo;
        $konyv->ar = $request->ar;
        $konyv->save();
    }


    public function destroy($konyvId)
    {
        $theme = Konyv::find($konyvId);
        $theme->delete();
    }
}
