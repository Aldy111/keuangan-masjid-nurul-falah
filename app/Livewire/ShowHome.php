<?php

namespace App\Livewire;

use App\Models\Activity;
use App\Models\Officer;
use App\Models\Transaction;
use App\Models\FridayOfficer;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $activity = Activity::all();
        $officer = Officer::all();
        $transaction = Transaction::all();
        $fridayOfficer = FridayOfficer::all();
        return view('livewire.show-home',[
            'activity'=> $activity,
            'officer'=> $officer,
            'transaction' => $transaction,
            'fridayOfficer' => $fridayOfficer
        ]);

    }
}
