<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;

class PdfController extends Controller
{
    //
    public function Pdf()
    {
     //$pdf=PDF::loadView('front.partials.hasta.hasta_print');
        //$pdf = App::make('dompdf.wrapper');
        //$pdf->loadHTML('<h1>Test</h1>');
        $data = User::all();
        //$pdf->setOptions('isPhpEnabled', true);
        $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('front.partials.pdf.yaz', $data);
        return $pdf->download('invoice.pdf');
    }
}
