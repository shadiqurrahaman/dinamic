<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PdfGenController extends Controller
{
    public function printPdf()
    {
        $data = [
            'title' => 'First PDF for Medium',
            'heading' => 'Hello from 99Points.info',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
            ];

        $pdf = PDF::loadView('pdf.pdf_view', $data);
        return $pdf->download('medium.pdf');
    }

}
