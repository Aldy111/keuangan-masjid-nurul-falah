<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Keuangan Masjid Nurul Falah</title>
</head>
<body>
    <h1 align="center">Transaksi Keuangan Masjid Nurul Falah</h1>

        <table style="width: 100%; border-collapse: collapse;">
        <thead>
                <tr style="background-color: #f2f2f2;">
                <th style="padding: 8px; text-align: left;">Tanggal</th>
                <th style="padding: 8px; text-align: left;">Jenis</th>
                <th style="padding: 8px; text-align: left;">Kategori</th>
                <th style="padding: 8px; text-align: left;">Keterangan</th>
                <th style="padding: 8px; text-align: right;">Jumlah</th>
                </tr>
        </thead>
        <tbody>
                @php
                $totalPemasukan = 0;
                $totalPengeluaran = 0;
                @endphp

                @foreach ($transactions as $transaction)
                @php
                        if ($transaction->category->is_expense) {
                        $totalPengeluaran += $transaction->amount;
                        } else {
                        $totalPemasukan += $transaction->amount;
                        }
                @endphp

                <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 8px;">{{ $transaction->date_transaction }}</td>
                        <td style="padding: 8px;">
                        @if ($transaction->category->is_expense)
                                Pengeluaran
                        @else
                                Pemasukan
                        @endif
                        </td>
                        <td style="padding: 8px;">{{ $transaction->category->name }}</td>
                        <td style="padding: 8px;">{{ $transaction->note }}</td>
                        <td style="padding: 8px; text-align: right;">Rp{{ number_format($transaction->amount, 2, ',', '.') }}</td>
                </tr>
                @endforeach

                <tr style="background-color: #f2f2f2;">
                <td colspan="4" style="padding: 8px; text-align: right; font-weight: bold;">Total Pemasukan:</td>
                <td style="padding: 8px; text-align: right; font-weight: bold;">Rp{{ number_format($totalPemasukan, 2, ',', '.') }}</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                <td colspan="4" style="padding: 8px; text-align: right; font-weight: bold;">Total Pengeluaran:</td>
                <td style="padding: 8px; text-align: right; font-weight: bold;">Rp{{ number_format($totalPengeluaran, 2, ',', '.') }}</td>
                </tr>
        </tbody>
        </table>
</body>
</html>