<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    // Show All Invoices
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    // Store New Invoice
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'invoice_no' => 'required|string',
            'date' => 'required|date',
            'tanim' => 'required|array',
            'birim_fiyat' => 'required|array',
            'miktar' => 'required|array',
            'toplam' => 'required|array',
            'signature' => 'nullable|image|max:2048',
        ]);

        $signaturePath = null;
        if ($request->hasFile('signature')) {
            $signaturePath = $request->file('signature')->store('signatures', 'public');
        }

        $invoice = Invoice::create([
            'invoice_no' => $request->invoice_no,
            'date' => $request->date,
            'signature' => $signaturePath,
            'details' => json_encode([
                'tanim' => $request->tanim,
                'birim_fiyat' => $request->birim_fiyat,
                'miktar' => $request->miktar,
                'toplam' => $request->toplam,
            ]),
        ]);

        return redirect()->route('invoices.show', $invoice->id)->with('success', 'Invoice saved successfully!');
    }

    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoices.show', compact('invoice'));
    }


    // Delete Invoice
    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        if ($invoice->signature) {
            \Storage::disk('public')->delete($invoice->signature);
        }
        $invoice->delete();

        return redirect()->back()->with('success', 'Invoice deleted successfully!');
    }

    public function downloadPdf($id)
    {
        $invoice = Invoice::findOrFail($id);
        $details = json_decode($invoice->details, true);
        $items = [];
        $total = 0;

        foreach ($details['tanim'] as $index => $tanim) {
            $items[] = [
                'tanim' => $tanim,
                'birim_fiyat' => $details['birim_fiyat'][$index],
                'miktar' => $details['miktar'][$index],
                'toplam' => $details['toplam'][$index],
            ];
            $total += $details['toplam'][$index];
        }

        $pdf = Pdf::loadView('invoices.pdf', compact('invoice', 'items', 'total'))
                ->setPaper('A4', 'portrait');  // ✅ Force A4 size here

        return $pdf->download('invoice_'.$invoice->invoice_no.'.pdf');
    }
}
