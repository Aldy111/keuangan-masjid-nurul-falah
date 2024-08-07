<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TransactionExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Transaction::with('category')->get();
    }

    public function headings(): array
    {
        return [
            'Tanggal',
            'Jenis',
            'Kategori',
            'Keterangan',
            'Jumlah',
        ];
    }

    public function map($transaction): array
    {
        return [
            $transaction->date_transaction,
            $transaction->category->is_expense ? 'Pengeluaran' : 'Pemasukan',
            $transaction->category->name,
            $transaction->note,
            'Rp' . number_format($transaction->amount, 2, ',', '.'),
        ];
    }
}
