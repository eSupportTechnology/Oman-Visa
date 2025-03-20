<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf;

class TemplateController extends Controller
{
    public function template01()
    {
        return view('AdminDashboard.templates.template01');
    }

    public function generate01(Request $request)
    {
        $data = $request->validate([
            'invoice_no' => 'required|string',
            'date' => 'required|date',
            'tanim' => 'required|array',
            'birim_fiyat' => 'required|array',
            'miktar' => 'required|array',
            'toplam' => 'required|array',
            'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    

        if ($request->hasFile('signature')) {
            $signaturePath = $request->file('signature')->store('signatures', 'public');
        } else {
            $signaturePath = null; 
        }

        $items = [];
        for ($i = 0; $i < count($data['tanim']); $i++) {
            $items[] = [
                'tanim' => $data['tanim'][$i],
                'birim_fiyat' => $data['birim_fiyat'][$i],
                'miktar' => $data['miktar'][$i],
                'toplam' => $data['toplam'][$i],
            ];
        }
    
        $total = array_sum($data['toplam']);
        $invoice_no = $data['invoice_no']; 
    
        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template01_pdf', compact('data', 'items', 'total', 'signaturePath', 'invoice_no'),[
            'enable-local-file-access' => true,
            'no-stop-slow-scripts' => true,
            'disable-smart-shrinking' => true,
        ])->setOption('encoding', 'UTF-8');
    
        return $pdf->download("AVUKAT MUSTAFA KESKIN_{$invoice_no}.pdf"); 
    }




    public function template02()
    {
        return view('AdminDashboard.templates.template02');
    }


    public function generate02(Request $request)
    {
        $data = $request->validate([
            'reference_no' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'nationality' => 'required|string|max:255',
            'passport_number' => 'required|string|max:255',
            'passport_issue_date' => 'required|date',
            'passport_expiry_date' => 'required|date|after:passport_issue_date',
            'work_permit_type' => 'required|string|max:255',
            'work_permit_validity_start' => 'required|date',
            'work_permit_validity_end' => 'required|date|after:work_permit_validity_start',
            'number_of_entries' => 'required|in:1,2',
            'validity_date' => 'required|date',
            'expiry_date' => 'required|date|after:validity_date',
            'residence_duration' => 'required|integer|min:1',
            'additional_visa_info' => 'nullable|string',
            'conditions' => 'nullable|string',
        ]);
    
        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template02_pdf', compact('data'), [
            'enable-local-file-access' => true,
            'no-stop-slow-scripts' => true,
            'disable-smart-shrinking' => true,
        ])->setOption('encoding', 'UTF-8');
        return $pdf->download('calisma-izni-belgesi.pdf');
        
    }



    public function template03()
    {
        return view('AdminDashboard.templates.template03');
    }


    public function generate03(Request $request)
    {

        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'passport_number' => 'required|string|max:255',
            'application_date' => 'required|date',
            'payment_type' => 'required|string|max:255',
            'payment_reference' => 'required|string|max:255',
            'amount_turkish_lira' => 'required|numeric',
            'amount_foreign_currency' => 'required|numeric',
            'footer_text' => 'required|string',
        ]);

        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template03_pdf', compact('data'))
            ->setOption('enable-javascript', true) 
            ->setOption('javascript-delay', 2000) 
            ->setOption('no-stop-slow-scripts', true);

        return $pdf->download('official_document.pdf');
    }
    
    
}