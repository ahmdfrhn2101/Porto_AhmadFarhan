<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kritik;
use App\Models\Saran;

class KritikController extends Controller
{
    public function kritik(){
        return view('KritikdanSaran',['title'=> 'Kritik dan Saran']);
    }

    public function isiKritik(Request $request){
        $Kritik = $request ->validate([
            'Email' => ['required','string'],
            'Kritik' => ['required','string'],
            'Saran' => ['required','string']
        ]);
    Kritik::Create([
        'Email' => $Kritik ['Email'],
        'Kritik' => $Kritik ['Kritik'],
    ]);
    Saran::Create([
        'Email' => $Kritik ['Email'],
        'Saran' => $Kritik ['Saran']
    ]);
    return redirect('/Masukan');
    }
}
