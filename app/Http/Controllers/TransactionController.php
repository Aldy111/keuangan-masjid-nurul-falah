<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Exports\TransactionExport;
use Maatwebsite\Excel\Facades\Excel;

class TransactionController extends Controller
{
    // public function index()
    // {
    //     $transactions = Transaction::with('category')->get();
    //     return view('transactions.index', compact('transactions'));
    // }

    public function export()
    {
        // $transactions = Transaction::with('category')->get();
        // $data = [
        //     'transactions' => $transactions
        // ];
        return Excel::download(new TransactionExport, 'Laporan Keuangan.xlsx');
    }

}