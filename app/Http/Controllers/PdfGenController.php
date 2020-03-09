<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\AddressInfo;
use App\AddressList;
use Carbon\Carbon;

class PdfGenController extends Controller
{

    public function printPdf($propertyId)
    {
        ini_set('max_execution_time',0);

        $addressinfo = AddressList::where('id',$propertyId)->with('addressInfo')->first();

        $recomendentAddresses = AddressList::inRandomOrder()->limit(4)->get();
        // return view('propertyResult')
        //     ->with('addressInfo',$addressinfo)
        //     ->with('recomendentAddresses',$recomendentAddresses);
        // return Carbon::today();
        $name = $addressinfo->address.'_'.Carbon::now()->format('Y-m-d');
        $data = [
            'addressInfo' => $addressinfo,
            'recomendentAddresses' => $recomendentAddresses        
            ];

    //    return view('pdf.pdf_view')->with($data);

        $pdf = PDF::loadView('pdf.pdf_view',['addressInfo'=>$addressinfo]);
        // ->with('addressInfo',$addressinfo)
        // ->with('recomendentAddresses',$recomendentAddresses);
        return $pdf->download($name.'.pdf');
    }

}
