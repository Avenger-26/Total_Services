<?php

namespace App\Http\Livewire\Customer;

use App\Models\Paytm;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CustomerDashboardComponent extends Component
{
    public function deleteService($id)
    {
        $paytm = Paytm::find($id);
        if ($paytm->slug_image) 
        {
            unlink('images/services'.'/'.$paytm->slug_image);
        }
        $paytm->delete();
        session()->flash('message','Service has been deleted successfully!');

    }
    public function render()
    {
        
        $paytms = Paytm::paginate(5);
        $totalServices = Paytm::where('user_id',Auth::user()->id)->count();
        $totalCost = Paytm::where('user_id',Auth::user()->id)->sum('price');
        return view('livewire.customer.customer-dashboard-component',['paytms'=>$paytms,'totalServices'=>$totalServices,'totalCost'=>$totalCost])->layout('FrontEnd.layouts.guest');
    }
}
