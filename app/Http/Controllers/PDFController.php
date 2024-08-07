<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use PDF;

class PDFController extends Controller
{
    
    public function downloadpdf(){
        $transactions = Transaction::all();
        $data = [
            'date_transaction' => date('n/d/Y'),
            'transactions' => $transactions
        ];

        $pdf = PDF::loadView('transactionPDF', $data);
        return $pdf->download('Laporan Keuangan.pdf');
    }
    // public function __invoke(Transaction $transaction)
    // {
    //     return Pdf::loadView('pdf', ['record' => $transaction])
    //         ->download($transaction->number. '.pdf');
    //}
}
