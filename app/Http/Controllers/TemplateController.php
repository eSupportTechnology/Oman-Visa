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
    

    public function template04()
    {
        return view('AdminDashboard.templates.template04');
    }


    public function generate04(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'id_number' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'working_hours' => 'required|string|max:255',
            'work_location' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template04_pdf', compact('data'))
        ->setOption('enable-javascript', true) 
        ->setOption('javascript-delay', 2000)
        ->setOption('no-stop-slow-scripts', true)
        ->setOption('background', true); 
    

        return $pdf->download('is_teklifi_mektubu.pdf');
    }



    public function template05()
    {
        return view('AdminDashboard.templates.template05');
    }


    public function generate05(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'passport_number' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template05_pdf', compact('data'))
            ->setOption('enable-javascript', true)
            ->setOption('javascript-delay', 2000)
            ->setOption('no-stop-slow-scripts', true)
            ->setOption('margin-top', 20);

        return $pdf->download('caddie_is_teklifi_mektubu.pdf');
    }



    public function template06()
    {
        return view('AdminDashboard.templates.template06');
    }


    public function generate06(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'passport_number' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'working_hours' => 'required|string|max:255',
            'work_location' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template06_pdf', compact('data'))
            ->setOption('enable-javascript', true) 
            ->setOption('javascript-delay', 2000) 
            ->setOption('no-stop-slow-scripts', true) 
            ->setOption('margin-top', 10);

        return $pdf->download('is_teklifi_mektubu.pdf');
    }



    public function template07()
    {
        return view('AdminDashboard.templates.template07');
    }

    public function generate07(Request $request)
    {
        $data = $request->validate([
            'passport_number' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'issuance_location' => 'required|string|max:255',
            'issue_date' => 'required|date',
            'expiry_date' => 'required|date',
            'mrz' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'old_passport_number' => 'nullable|string|max:255',
        ]);

        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template07_pdf', compact('data'))
            ->setOption('enable-javascript', true)
            ->setOption('javascript-delay', 2000) 
            ->setOption('no-stop-slow-scripts', true) 
            ->setOption('margin-top', 10);

        return $pdf->download('passport_information.pdf');
    }




    public function template08()
    {
        return view('AdminDashboard.templates.template08');
    }

    public function generate08(Request $request)
    {

        $data = $request->validate([
            'passport_number' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'issuance_location' => 'required|string|max:255',
            'issue_date' => 'required|date',
            'expiry_date' => 'required|date',
            'mrz' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'old_passport_number' => 'nullable|string|max:255',
            'old_issue_date' => 'nullable|date',
            'old_issuance_location' => 'nullable|string|max:255',
        ]);

        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template08_pdf', compact('data'))
            ->setOption('enable-javascript', true)
            ->setOption('javascript-delay', 2000) 
            ->setOption('no-stop-slow-scripts', true) 
            ->setOption('margin-top', 10);

        return $pdf->download('passport_verification_document.pdf');
    }

}