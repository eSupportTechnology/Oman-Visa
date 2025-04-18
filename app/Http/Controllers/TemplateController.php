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
            'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
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
    
        return $pdf->inline("AVUKAT_MUSTAFA_KESKIN_{$invoice_no}.pdf");
    }




    public function template02()
    {
        return view('AdminDashboard.templates.template02');
    }


    public function generate02(Request $request)
    {
        // ✅ Validate all inputs
        $validated = $request->validate([
            'reference_no' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'nationality' => 'required|string|max:255',
            'passport_number' => 'required|string|max:20',
            'passport_issue_date' => 'required|date',
            'passport_expiry_date' => 'required|date',
            'work_permit_type' => 'required|string|max:50',
            'work_permit_validity_start' => 'required|date',
            'work_permit_validity_end' => 'required|date',
            'number_of_entries' => 'required|integer',
            'validity_date' => 'required|date',
            'expiry_date' => 'required|date',
            'residence_duration' => 'required|integer',
            'additional_visa_info' => 'nullable|string|max:255', // Optional: if you use it in the template
        ]);

        // ✅ Load PDF view with validated data
        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template02_pdf', [
            'data' => $validated
        ])
        ->setOption('enable-javascript', true)
        ->setOption('javascript-delay', 500)
        ->setOption('no-stop-slow-scripts', true)
        ->setOption('disable-smart-shrinking', true)
        ->setOption('enable-local-file-access', true)
        ->setOption('encoding', 'UTF-8');

        return $pdf->inline('BarCode.pdf');
    }




    public function template03()
    {
        return view('AdminDashboard.templates.template03');
    }


    public function generate03(Request $request)
    {
        // ✅ Validate all inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'passport_number' => 'required|string|max:255',
            'application_date' => 'required|date',
            'seri_no' => 'required|string|max:255',
            'sam_no' => 'required|string|max:255',
            'ozel_no' => 'required|string|max:255',
            'reference_number' => 'required|string|max:255',
            'signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // ✅ Handle signature upload
        if ($request->hasFile('signature')) {
            $signaturePath = $request->file('signature')->store('signatures', 'public');
            $validated['signature_path'] = $signaturePath; // pass to view
        }

        // ✅ Load PDF view with validated data
        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template03_pdf', [
            'data' => $validated
        ])
        ->setOption('enable-javascript', true)
        ->setOption('javascript-delay', 2000)
        ->setOption('no-stop-slow-scripts', true);

        return $pdf->inline('official_document.pdf');
    }
    

    public function template04()
    {
        return view('AdminDashboard.templates.template04');
    }


    public function generate04(Request $request)
    {
        // ✅ Validate input fields
        $validated = $request->validate([
            // Page 1: Passport
            'type' => 'nullable|string|max:255',
            'country_code' => 'nullable|string|max:10',
            'passport_number' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'birth_place' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'issued_at' => 'nullable|string|max:255',
            'issue_date' => 'nullable|date',
            'expiry_date' => 'nullable|date',
            'mrz' => 'nullable|string',
            'father_name' => 'nullable|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'old_passport' => 'nullable|string|max:255',
            'signature1' => 'required|image|mimes:jpeg,png,jpg,gif',

            // Page 2: Aadhaar
            'aadhaar_enroll_no' => 'nullable|string|max:255',
            'aadhaar_recipient' => 'nullable|string|max:255',
            'aadhaar_care_of' => 'nullable|string|max:255',
            'aadhaar_address' => 'nullable|string',
            'aadhaar_mobile' => 'nullable|string|max:20',
            'aadhaar_number' => 'nullable|string|max:50',
            'aadhaar_identity_label' => 'nullable|string|max:255',
            'aadhaar_full_name' => 'nullable|string|max:255',
            'aadhaar_dob' => 'nullable|date',
            'aadhaar_gender' => 'nullable|string',
            'signature2' => 'nullable|image|mimes:jpeg,png,jpg,gif',

            // Page 3: Police Verification
            'pvr_no' => 'required|string|max:255',
            'pvr_issue_date' => 'required|date',
            'pvr_name' => 'required|string|max:255',
            'pvr_address' => 'required|string',
            'pvr_remarks' => 'nullable|string|max:255',
            'pvr_place' => 'required|string|max:255',
            'pvr_report_date' => 'required|date',
            'signature3' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // ✅ Handle file uploads
        foreach (['signature1', 'signature2', 'signature3'] as $signature) {
            if ($request->hasFile($signature)) {
                $path = $request->file($signature)->store('signatures', 'public');
                $validated[$signature . '_path'] = $path;
            }
        }

        // ✅ Load PDF view and generate
        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template04_pdf', ['data' => $validated])
            ->setOption('enable-javascript', true)
            ->setOption('javascript-delay', 2000)
            ->setOption('no-stop-slow-scripts', true);

        return $pdf->inline('official_document.pdf');
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

        return $pdf->inline('caddie_is_teklifi_mektubu.pdf');
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

        return $pdf->inline('is_teklifi_mektubu.pdf');
    }



    public function template07()
    {
        return view('AdminDashboard.templates.template07');
    }

    public function generate07(Request $request)
    {
        $validatedData = $request->validate([
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

        try{
        $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template07_pdf', compact('data'))
            ->setOption('enable-javascript', true)
            ->setOption('javascript-delay', 2000) 
            ->setOption('no-stop-slow-scripts', true) 
            ->setOption('margin-top', 10);

        return $pdf->download('passport_information.pdf');
        }catch (\Exception $e) {
            return response()->json([
                'error' => 'PDF generation failed. ' . $e->getMessage()
            ], 500);
        }
    }

    public function template07_1()
    {
        return view('AdminDashboard.templates.template07_1');
    }

    public function generate07_1(Request $request)
    {
        $validatedData = $request->validate([
            'enrollment_number' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string|max:10',
            'address' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:20',
            'aadhaar_no' => 'required|string|max:20',
        ]);
    
        try {
            $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template07_1_pdf', compact('validatedData'))
                ->setOption('enable-javascript', true)
                ->setOption('javascript-delay', 1000) 
                ->setOption('no-stop-slow-scripts', true) 
                ->setOption('margin-top', 10);
    
            return $pdf->download('enrollment_form.pdf');
    
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'PDF generation failed: ' . $e->getMessage()]);
        }
    }

    public function template07_2()
    {
        return view('AdminDashboard.templates.template07_2');
    }

    public function generate07_2(Request $request)
    {
        $validatedData = $request->validate([
            'pvr_no' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'legal_notice' => 'required|string|max:255',
            'publication_date' => 'required|date',
            'approval' => 'required|string|max:255',
            'Issuance' => 'required|string|max:255',
        ]);

        try {
            $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template07_2_pdf', compact('validatedData'))
                ->setOption('enable-javascript', true)
                ->setOption('javascript-delay', 2000)
                ->setOption('no-stop-slow-scripts', true)
                ->setOption('margin-top', 10);

            return $pdf->download('police_report.pdf');
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'PDF generation failed. ' . $e->getMessage()
            ], 500);
        }
    }


    public function template08()
    {
        return view('AdminDashboard.templates.template08');
    }

    public function generate08(Request $request)
    {
        $validatedData = $request->validate([
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
      
        try {
            $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template08_pdf', compact('validatedData'))
                ->setOption('enable-javascript', true)
                ->setOption('javascript-delay', 1000) 
                ->setOption('no-stop-slow-scripts', true)
                ->setOption('margin-top', 10);
    
            return $pdf->download('passport_verification_document.pdf');
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'PDF generation failed. ' . $e->getMessage()
            ], 500);
        }
    }

    public function template08_1()
    {
        return view('AdminDashboard.templates.template08_1');
    }

    public function generate08_1(Request $request)
    {
        $validatedData = $request->validate([
            'recode_no' => 'required|string|max:255',
            'enrolment_no' => 'required|string|max:255',
            'reciver' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'ev_no' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'aadhar_no' => 'required|string|max:255',
            'vid_no' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string|max:255',
            'aadhaar_message' => 'required|string|max:500',
        ]);
        
        try {
            $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template08_1_pdf', compact('validatedData'))
                ->setOption('enable-javascript', true)
                ->setOption('javascript-delay', 1000)
                ->setOption('no-stop-slow-scripts', true)
                ->setOption('margin-top', 10);
    
            return $pdf->download('passport_verification_document.pdf');
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'PDF generation failed. ' . $e->getMessage()
            ], 500);
        }
    }
    

    public function template08_2()
    {
        return view('AdminDashboard.templates.template08_2');
    }

    public function generate08_2(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'passport_no' => 'required|string|max:255',
            'issued_date' => 'required|date',
            'age' => 'required|integer|min:1',
            'address' => 'required|string|max:500',
            'district' => 'required|string|max:255',
            'start_date' => 'required|date',
            'date'=>'required|date',
            'c_no'=> 'required|string|max:255',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        
        try {
            $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template08_2_pdf', compact('validatedData'))
                ->setOption('enable-javascript', true)
                ->setOption('javascript-delay', 1000)
                ->setOption('no-stop-slow-scripts', true)
                ->setOption('margin-top', 10);
            
            return $pdf->download('passport_verification_document.pdf');
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'PDF generation failed. ' . $e->getMessage()
            ], 500);
        }
    }
    
    public function template09()
    {
        return view('AdminDashboard.templates.template09');
    }

    public function generate09(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'passport_no' => 'required|string|max:255',
            'hours' => 'required|integer',
            'salary' => 'required|numeric',
            'days' => 'required|integer',
            'date' => 'required|date',
        ]);
        
        try {
            $pdf = SnappyPdf::loadView('AdminDashboard.pdf.template09_pdf', compact('validatedData'))
                ->setOption('enable-javascript', true)
                ->setOption('javascript-delay', 1000)
                ->setOption('no-stop-slow-scripts', true)
                ->setOption('margin-top', 10);

            return $pdf->download('passport_verification_document.pdf');
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'PDF generation failed. ' . $e->getMessage()
            ], 500);
        }
    }    

}