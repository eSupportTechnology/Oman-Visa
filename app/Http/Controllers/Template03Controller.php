<?php

namespace App\Http\Controllers;

use App\Models\Template03;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class Template03Controller extends Controller
{
    // Show create form
    public function create()
    {
        return view('template03.create');
    }

    // Store function (Save data)
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required|string',
            'passport_number' => 'required|string',
            'application_date' => 'required|date',
            'seri_no' => 'required|string',
            'sam_no' => 'required|string',
            'ozel_no' => 'required|string',
            'reference_number' => 'required|string',
            'signature' => 'nullable|image|max:2048',
        ]);

        $signaturePath = null;
        if ($request->hasFile('signature')) {
            $signaturePath = $request->file('signature')->store('signatures', 'public');
        }

        $data = Template03::create([
            'name' => $request->name,
            'passport_number' => $request->passport_number,
            'application_date' => $request->application_date,
            'seri_no' => $request->seri_no,
            'sam_no' => $request->sam_no,
            'ozel_no' => $request->ozel_no,
            'reference_number' => $request->reference_number,
            'signature' => $signaturePath,
        ]);

        return redirect()->route('template03.showw', $data->id)->with('success', 'Data saved successfully!');
    }

    // Show page for single entry
    public function show($id)
    {
        $data = Template03::findOrFail($id);
        return view('template03.show', compact('data'));
    }

    // Delete function
    public function destroy($id)
    {
        $data = Template03::findOrFail($id);
        if ($data->signature) {
            \Storage::disk('public')->delete($data->signature);
        }
        $data->delete();

        return redirect()->route('template03.index')->with('success', 'Deleted successfully.');
    }

    // Index page to list all entries
    public function index()
    {
        $items = Template03::latest()->get();
        return view('template03.index', compact('items'));
    }

    public function downloadPdf($id)
    {
        $data = Template03::findOrFail($id);

        $pdf = Pdf::loadView('template03.pdf', compact('data'))
                ->setPaper('A4', 'portrait'); // ✅ A4 Portrait

        return $pdf->download('template03_'.$data->id.'.pdf');
    }

    
}
