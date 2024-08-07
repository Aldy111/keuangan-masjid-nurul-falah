<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use App\Filament\Resources\TransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListTransactions extends ListRecords
{
    protected static string $resource = TransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\ButtonAction::make('Laporan pdf')->url(fn()=>route('download.tes'))->openUrlInNewTab(),
            Actions\CreateAction::make(),
        ];
    }
    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'expenses' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('category', function ($query) {
                    $query->where('is_expense', true);
                })),
            'incomes' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('category', function ($query) {
                    $query->where('is_expense', false);
                })),
        ];
    }
}
